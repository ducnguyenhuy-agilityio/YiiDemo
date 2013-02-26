<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 2/26/13
 * Time: 10:34 PM
 * To change this template use File | Settings | File Templates.
 */
class ModuleUrlManager
{
    static function collectRules() {
        if (!empty(Yii::app()->modules)) {
            foreach(Yii::app()->modules as $moduleName => $config) {
                $module = Yii::app()->getModule($moduleName);
                if (!empty($module->urlRules)) {
                    Yii::app()->getUrlManager()->addRules($module->urlRules);
                }
            }
        }

        return true;
    }
}
