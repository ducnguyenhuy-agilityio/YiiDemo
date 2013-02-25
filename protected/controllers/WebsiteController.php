<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 2/22/13
 * Time: 11:37 PM
 * To change this template use File | Settings | File Templates.
 */
class WebsiteController extends CController
{
    public function actionIndex() {
        $this->render('index');
    }

    public function actionError() {
        if ($error=Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else $this->render('error', $error);
        }
    }
    // http://localhost/YiiDemo/index.php?r=website/page&alias=hello
    public function actionPage($alias = NULL) {
        if ($alias) echo "Page is $alias.";
    }

    public function actionTest() {
        echo $this->createUrl('index');
        echo $this->createUrl('website/page', array('alias' => 'about'));
        echo $this->createAbsoluteUrl('website/page', array('alias' => 'about'));
    }
}
