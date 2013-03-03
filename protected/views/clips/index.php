<?php $this->beginClip('footer'); ?>
This application was built with Yii
<?php $this->endClip(); ?>

<br /><br />Decorators: <br />
<?php $this->beginContent('//decorators/quote', array('author' => 'Duc Nguyen', 'mytext' => 'Hello'));?>
If anything bad can happen, it probably will
<?php $this->endContent()?>

