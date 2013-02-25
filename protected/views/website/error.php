<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 2/24/13
 * Time: 5:22 PM
 * To change this template use File | Settings | File Templates.
 */

$this->pageTitle = Yii::app()->name . ' - Error';
$this->breadcrumbs = array(
    'Error'
);
?>
<h2>Error <?php echo $code; ?></h2>

<div class="error">
    <?php echo CHtml::encode($message);?>
</div>