<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/1/13
 * Time: 1:40 AM
 * To change this template use File | Settings | File Templates.
 */
class UserController extends CController
{
    // Using external delete action for post controller.
    function actions() {
        return array(
            'delete' => array(
                'class' => 'DeleteAction',
                'modelClass' => 'User'
            )
        );
    }

}
