<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/3/13
 * Time: 5:02 PM
 * To change this template use File | Settings | File Templates.
 */
class QuoteController extends CController
{
    private $quotes = array(
        array('Text 1', 'Duc'),
        array('Text 2', 'Thanh'),
        array('Text 3', 'Suong'),
        array('Text 4', 'Loi'),
        array('Text 5', 'Hung')
    );

    private function getRandomQuote() {
        return $this->quotes[array_rand($this->quotes, 1)];
    }

    function actionIndex() {
        $this->render('index', array(
            'quote' => $this->getRandomQuote()
        ));
    }

    function actionGetQuote() {
        $quote = $this->getRandomQuote();
        if (Yii::app()->request->isAjaxRequest) {
            $this->renderPartial('_quote', array(
                'quote' => $quote
            ));
        } else {
            $this->render('index', array(
                'quote' => $quote
            ));
        }
    }
}
