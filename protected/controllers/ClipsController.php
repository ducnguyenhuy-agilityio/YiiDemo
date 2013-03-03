<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/2/13
 * Time: 9:31 PM
 * To change this template use File | Settings | File Templates.
 */
class ClipsController extends CController
{
    function actionIndex() {
        // Define content for clips
        $this->beginClip('beforeContent');
        echo 'Your IP is '. Yii::app()->request->userHostAddress;
        $this->endClip();
        $this->render('index');
    }
}
