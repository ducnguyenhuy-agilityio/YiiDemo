<?php
/**
 * This is controller actions of Post controller, we're trying to create it as separate class here.
 * Then connect this class to controllers. This way, you can reuse some common functionality
 */
class DeleteAction extends CAction
{
    public $pk = 'id';
    public $redirectTo = 'index';
    public $modelClass;

    function run() {

        if (empty($_GET[$this->pk]))
            throw new CHttpException(404);

        //$post = Post::model()->findByPk($_GET['id']);
        $model = CActiveRecord::model($this->modelClass)->findByPk($_GET[$this->pk]);

        if (!$model)
            throw new CHttpException(404);

        if ($model->delete()) {
            // Get Controller who owns this action
            $controller = $this->getController();
            $controller->redirect(array('index', 'model' => $this->modelClass));
        }


        throw new CHttpException(500);
    }
}
