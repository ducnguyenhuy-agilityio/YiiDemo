<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/3/13
 * Time: 9:13 AM
 * To change this template use File | Settings | File Templates.
 */
class ArticleController extends CController
{
    function actionIndex() {
        $this->layout = 'articles';
        $this->render('//site/index');
    }
}
