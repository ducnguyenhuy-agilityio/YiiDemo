<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 5:49 PM
 * To change this template use File | Settings | File Templates.
 */
class SiteConfirmationController extends Controller
{
    function actionIndex() {
        $confirmation = new SiteConfirmation();
        $confirmation->url = 'http://yiicookbook.org/verify.html';

        if ($confirmation->validate()) {
            echo 'OK';
        } else {
            echo 'Please upload a file.';
        }
    }
}
