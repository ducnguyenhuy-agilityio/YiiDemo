<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/2/13
 * Time: 4:42 PM
 * To change this template use File | Settings | File Templates.
 */
class ControllerContextController extends CController
{
    function actionIndex() {
        $this->pageTitle = 'Controller contect test';
        $this->render('index');
    }

    function hello() {
        if (!empty($_GET['name'])) echo $_GET['name'];
    }
}
