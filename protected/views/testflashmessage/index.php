<?php
if (yii::app()->user->hasFlash('success')) {
?>
    <div class="flash-notice">
        <?php echo Yii::app()->user->getFlash('success'); ?>
    </div>
<?php }

if (yii::app()->user->hasFlash('error')) {
    ?>
<div class="flash-error">
    <?php echo Yii::app()->user->getFlash('error'); ?>
</div>
<?php } ?>