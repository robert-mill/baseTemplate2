<?php

namespace backend\controllers;

use Imagine\Image\Box;
use Yii;
use backend\models\Articles_images;
use backend\models\Articles_imagesSearch;
use yii\imagine\Image;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * Articles_imagesController implements the CRUD actions for Articles_images model.
 */
class Articles_imagesController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Articles_images models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Articles_imagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articles_images model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Articles_images model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articles_images();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            $model->file = UploadedFile::getInstance($model,'file');
            $model->file->saveAs(Yii::getAlias('@frontend').'/web/assets/images/uploads/large/'.$model->file->name, ['quality'=>90]);
            $model->article_image_name = 'uploads/main'.$model->file->name.".".$model->file->extension;
            $imgfromFile = Yii::getAlias('@frontend').'/web/assets/images/uploads/large/'.$model->file->name;
            $imgtomain = Yii::getAlias('@frontend').'/web/assets/images/uploads/main/'.$model->file->name;
            $imgToThumb = Yii::getAlias('@frontend').'/web/assets/images/uploads/thumbs/'.$model->file->name;
            Image::frame($imgfromFile)->thumbnail(new Box(250, 250))->save($imgtomain, ['quality' => 80]);
            Image::frame($imgfromFile)->thumbnail(new Box(100, 100))->save($imgToThumb, ['quality' => 50]);
            return $this->redirect(['view', 'id' => $model->article_image_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Articles_images model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->article_image_id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Articles_images model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Articles_images model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articles_images the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articles_images::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
