<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/2/13
 * Time: 10:28 AM
 * To change this template use File | Settings | File Templates.
 */
class StaticPagesController extends Controller
{
    function actions() {
        return array(
            'page' => array(
                'class' => 'CViewAction'

            )
        );
    }

}
