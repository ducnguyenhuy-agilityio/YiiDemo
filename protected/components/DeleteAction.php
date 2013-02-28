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
        $post = CActiveRecord::model($this->modelClass)->findByPk($_GET[$this->id]);

        if (!$post)
            throw new CHttpException(404);

        if ($post->delete())
            $this->redirect($this->redirectTo);

        throw new CHttpException(500);
    }
}
