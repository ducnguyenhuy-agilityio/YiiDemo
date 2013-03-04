<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ducnguyenhuy
 * Date: 3/4/13
 * Time: 7:41 PM
 * To change this template use File | Settings | File Templates.
 */
class UploadController extends Controller
{
    function actionIndex() {
        $dir = Yii::getPathOfAlias('application.uploads');
        $uploaded = false;

        $model = new Upload();

        if (isset($_POST['Upload'])) {
            $model->attributes = $_POST['Upload'];
            $file = CUploadedFile::getInstance($model, 'file');

            if ($model->validate()) {
                $uploaded = $file->saveAs($dir.'/'.$file->getName());
            } else {
                echo 'error';
            }
        }

        $this->render('index', array(
            'model' => $model,
            'uploaded' => $uploaded,
            'dir' => $dir
        ));

    }

}
