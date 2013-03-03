<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/2/13
 * Time: 5:09 PM
 * To change this template use File | Settings | File Templates.
 */
class PartialsController extends CController
{
    function actionIndex() {
        $this->render('index');
    }

    function actionSendmails() {
        // Get all users
        $users = User::model()->findAll();

        foreach($users as $user) {
            $this->sendEmail('welcome', $user->email, 'Welcome to the website!', array('user' => $user));
        }
    }

    function sendEmail($template, $to, $subject, $data) {
        mail($to, $subject, $this->renderPartial('//email/'.$template, $data, true));
    }
}
