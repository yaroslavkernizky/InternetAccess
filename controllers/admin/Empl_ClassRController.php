<?php

namespace app\controllers\admin;

use Yii;
use app\models\Empl_ClassR;
use app\models\admin\Empl_ClassRSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * Empl_ClassRController implements the CRUD actions for empl_-class-r model.
 */
class Empl_ClassRController extends Controller
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
     * Lists all empl_-class-r models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new Empl_ClassRSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single empl_-class-r model.
     * @param integer $emploeeId
     * @param integer $classRoomId
     * @return mixed
     */
    public function actionView($emploeeId, $classRoomId)
    {
        return $this->render('view', [
            'model' => $this->findModel($emploeeId, $classRoomId),
        ]);
    }

    /**
     * Creates a new empl_-class-r model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Empl_ClassR();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'emploeeId' => $model->emploeeId, 'classRoomId' => $model->classRoomId]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing empl_-class-r model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $emploeeId
     * @param integer $classRoomId
     * @return mixed
     */
    public function actionUpdate($emploeeId, $classRoomId)
    {
        $model = $this->findModel($emploeeId, $classRoomId);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'emploeeId' => $model->emploeeId, 'classRoomId' => $model->classRoomId]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing empl_-class-r model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $emploeeId
     * @param integer $classRoomId
     * @return mixed
     */
    public function actionDelete($emploeeId, $classRoomId)
    {
        $this->findModel($emploeeId, $classRoomId)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the empl_-class-r model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $emploeeId
     * @param integer $classRoomId
     * @return Empl_ClassR the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($emploeeId, $classRoomId)
    {
        if (($model = Empl_ClassR::findOne(['emploeeId' => $emploeeId, 'classRoomId' => $classRoomId])) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
