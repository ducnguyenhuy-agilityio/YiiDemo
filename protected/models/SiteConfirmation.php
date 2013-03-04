<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 5:34 PM
 * To change this template use File | Settings | File Templates.
 */
class SiteConfirmation extends CFormModel
{
    public $url;

    public function rules() {
        return array(
            // array('url', 'confirm') // the validation rule in a method named confirm
            // array('url', 'confirm', 'param1' => 'value1', 'param2' => 'value3') see confirm function
            array('url', 'RemoteFileValidator', 'content' => 'code here1') // if there is no method with the same name in the model and no same named built-in validator, then Yii will try to find an external validator class with the name or path alias specified.
        );
    }

    // $attribute set to urland $params set to array('param1' => 'value1', 'param2' => 'value3')
    public function confirm($attribute, $params) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $this->url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $output = curl_exec($ch);
        curl_close($ch);

        if (trim($output) != 'code here1')
            $this->addError('url', 'Please upload file first.');
    }

}
