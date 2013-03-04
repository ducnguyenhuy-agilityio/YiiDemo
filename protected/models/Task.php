<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 3:10 PM
 * To change this template use File | Settings | File Templates.
 */
class Task extends CFormModel
{
    public $title;
    public $text;

    public function rules() {
        return array(
            array('title', 'required'),
            array('text', 'safe')
        );
    }


}
