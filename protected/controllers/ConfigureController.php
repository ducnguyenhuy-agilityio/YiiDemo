<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 2:05 PM
 * To change this template use File | Settings | File Templates.
 */
class ConfigureController extends Controller
{
    function actionIndex() {
        $config = CJavaScript::encode(Yii::app()->params->toArray());

        Yii::app()->clientScript->registerScript('appConfig', "var config = ".$config.";",
        CClientScript::POS_HEAD);

        $this->render('index');
    }

}
