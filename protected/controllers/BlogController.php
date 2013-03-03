<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/3/13
 * Time: 8:27 AM
 * To change this template use File | Settings | File Templates.
 */
class BlogController extends CController
{
    function actionIndex() {
        $this->layout = 'blog';
        $this->render('//site/index');
    }
}
