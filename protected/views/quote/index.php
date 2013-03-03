<h2>Quote of the day</h2>
<div id="status"></div>
<div id="quote-of-the-day">
    <?php $this->renderPartial('_quote', array(
        'quote' => $quote
    ));?>
</div>
<?php
// Create a link which makes a request to the getQuote action
// and updates the HTML element with the ID of quote-of-the-day,
// also add action callback through a third parameter , 'success' => 'js:function(data){ $("#status").text("success"); }'
echo CHtml::ajaxLink('Next quote', array('getQuote'),
    array('update' => '#quote-of-the-day'));?>