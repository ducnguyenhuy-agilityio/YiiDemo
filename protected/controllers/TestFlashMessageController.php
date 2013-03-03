<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/2/13
 * Time: 1:47 PM
 * To change this template use File | Settings | File Templates.
 */
class TestFlashMessageController extends CController
{
    function actionOK() {
        Yii::app()->user->setFlash('success', 'Everything went fine!');
        $this->redirect('index');
    }

    function actionBad() {
        Yii::app()->user->setFlash('error', 'Everything went wrong!');
        $this->redirect('index');
    }

    function actionIndex() {
        $this->render('index');
    }
}
