<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 3:11 PM
 * To change this template use File | Settings | File Templates.
 */
class TaskController extends CController
{
    public function filters() {
        return array(
            'ajaxOnly + field'
        );
    }

    public function actionIndex() {
        $models =  array();

        if (!empty($_POST['Task'])) {
            foreach($_POST['Task'] as $taskData) {
                $model = new Task();
                // Set model's attributes with data
                $model->setAttributes($taskData);
                if ($model->validate())
                    $models[] = $model;
            }
        }

        if (!empty($models)) {
            // Starts saving tasks here.
        } else {
            $models[] = new Task();
        }

        $this->render('index', array(
            'models' => $models
        ));
    }

    public function actionField($index) {
        $model = new Task();

        $this->renderPartial('_task', array(
            'model' => $model,
            'index' => $index
        ));
    }
}
