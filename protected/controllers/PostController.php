<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyen
 * Date: 3/1/13
 * Time: 12:45 AM
 * To change this template use File | Settings | File Templates.
 */
class PostController extends CController
{
    function actionIndex() {
        // Get all post records from Post table
        $posts = Post::model()->findAll();

        // Render index view and also give all post records to that.
        $this->render('index', array('posts' => $posts));
    }

    function actionAll() {
        $criteria = new CDbCriteria();
        // Get total models count
        $count = Post::model()->count($criteria);

        // Initialize new pagination component instance with total models count
        $pages = new CPagination($count);

        // Element per page
        $pages->pageSize = 5;
        // Apply limit and offset to criteria
        $pages->applyLimit($criteria);

        // sorting
        // Create sorter instance for the model
        $sort = new CSort('Post');
        $sort->attributes = array(
            'id',
            'title'
        );
        // Sort by and applying order conditions to criteria
        $sort->applyOrder($criteria);

        // Give criteria to findAll
        $models = Post::model()->findAll($criteria);

        $this->render('all', array(
            'models' => $models,
            'pages' => $pages,
            'sort' => $sort
        ));
    }

    // Comment out this function because we created this action in separate class (DeleteAction)
//    function actionDelete($id) {
//        // Try to find post by primary key
//        $post = Post::model()->findByPk($id);
//
//        // If post does not exist
//        if (!$post)
//            throw new CHttpException(404); // throw 404 error
//
//        // Post exists, try to delete it
//        if ($post->delete())
//            $this->redirect('post/index'); // redirect to index action after post is deleted.
//
//        throw new CHttpException(500);
//    }

    // Using external delete action for post controller.
    function actions() {
        return array(
            'delete' => array(
                'class' => 'DeleteAction',
                'modelClass' => 'Post'
            )
        );
    }
}
