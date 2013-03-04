<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 7:40 PM
 * To change this template use File | Settings | File Templates.
 */
class Upload extends CFormModel
{
    public $file;

    public function rules() {
        return array(
            array(
                'file', 'file', 'types' => 'gif, jpg, png', 'maxSize' => (1024 * 200) // 200 kb
            )
        );
    }
}
