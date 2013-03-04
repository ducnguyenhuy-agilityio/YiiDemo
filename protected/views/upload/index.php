<?php if ($uploaded) { ?>
    <p>
        File was uploaded. Check <?php echo $dir?>.
    </p>
<?php } ?>

<?php
    echo CHtml::beginForm('', 'post', array('enctype' => 'multipart/form-data'));
    echo CHtml::error($model, 'file');
    echo CHtml::activeFileField($model, 'file');
    echo CHtml::submitButton('Upload');
    echo CHtml::endForm();
?>