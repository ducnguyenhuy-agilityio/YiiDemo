<h1><?php echo $this->pageTitle; // Access currently running controller properties?></h1>
<p>Hello call. <?php $this->hello(); //http://localhost/YiiDemo/controllercontext/index/name/duc ?></p>
<?php $this->widget('zii.widgets.CMenu', array(
        'items' => array(
            array('label' => 'Home', 'url' => array('index')),
            array('label' => 'VN Express', 'url' => 'http://vnexpress.net')
        )
    )
); ?>
