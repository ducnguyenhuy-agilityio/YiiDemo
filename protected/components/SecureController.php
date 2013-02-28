<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 2/27/13
 * Time: 9:42 PM
 * To change this template use File | Settings | File Templates.
 */
class SecureController extends Controller
{
    public function filters() {
        return array('accessControl');
    }

    public function accessRules() {
        return array(
            array(
                'allow',
                'users' => array('@')
            ),
            array(
                'deny',
                'users' => array('*')
            )
        );
    }


}
