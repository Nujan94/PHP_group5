<?php
/**
 * Created by PhpStorm.
 * User: najun
 * Date: 2017/2/16
 * Time: 18:23
 */

namespace backend\controllers;


use backend\models\Brand;
use yii\web\Controller;

class BrandController extends Controller
{
    public function actionIndex()
    {
        $brands = Brand::find()->all();

        return $this->render('index',['brands'=>$brands]);
    }

    public function actionAdd()
    {
        $model = new Brand();

        if(\Yii::$app->request->isPost){
            var_dump($model->validate());
            var_dump($model->getErrors());exit;
            $model->load(\Yii::$app->request->post());
            if($model->save()){
                $this->redirect(['index']);
            }
        }
        return $this->render('add',['model'=>$model]);
    }
}