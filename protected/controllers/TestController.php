<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 2/25/13
 * Time: 11:09 PM
 * To change this template use File | Settings | File Templates.
 */
class TestController extends CController
{
    public function actionIndex() {
        if (Yii::app()->request->isAjaxRequest)
            $this->renderPartial('test');
        else
            $this->render('test');
    }

    public function actionRequest() {
        $request = Yii::app()->request;

        // Returns the named GET or POST parameter value
        // If the GET or POST parameter does not exist, the second parameter to this method will be returned.
        echo $request->getParam('name', ''); // both GET and POST parameter value

        echo $request->getQuery('name'); // GET parameter value

        echo $request->getPost('name', 'NOT FOUND'); // POST parameter value
    }

    public function actionDownload() {
        $request = Yii::app()->getRequest();

        $request->sendFile('duc.txt', 'File content goes here.');// Download duc.txt with content 'File content goes here.' in it
    }

    public function actionImport($song) {
        $lyric = 'Noting was found.';

        // importing a class
        Yii::import('application.apis.lyrics.LyricsFinder');

        $finder = new LyricsFinder();

        if (!empty($song)) {
            $lyric = $finder->getText($song);
        }

        echo $lyric;
    }

    public function actionCookie() {
        $request = Yii::app()->request;

        // getting a cookie
        $cookie = $request->cookies['test'];

        if ($cookie)
            // printing cookie value
            echo $cookie->value;
        else {
            // creating new cookie
            $cookie = new CHttpCookie('test', 'I am a cookie!');
            $request->cookies['test'] = $cookie;
        }
    }

    public function ActionUsePost() {

}
}
