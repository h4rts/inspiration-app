<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;

/**
 * Site controller
 */
class ApiController extends Controller
{
    public function actionIndex()
    {
        $this->layout = false;
        return $this->render('index');
    }   
}