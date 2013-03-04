<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 7:30 PM
 * To change this template use File | Settings | File Templates.
 */
class RemoteFileValidator extends CValidator
{
    public $content = '';

    protected function validateAttribute($object, $attribute) {
        $value = $object->$attribute;

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $value);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        if (trim($output) != $this->content)
            $this->addError($object, $attribute, 'Please upload file first.');
    }

}
