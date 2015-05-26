<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\TLoginForm;
use app\models\Tlogindatabase;
use yii\data\Pagination;
use app\models\app\models;


class TLoginCOntroller extends Controller
{
	public function actions()
	{
		return array(
				//captcha action render the CAPTCHA image displayed on the contact page
				'captcha' => array(
						'class' => 'CaptchaAction',
						'backColor'=>0xFFFFFF,
						'maxLength' => 4,
						'minLength' => 4,
						'hegith' => '40',
						'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
						'testLimit'=>0,
				),
		);
	}


	public function actionLogin()
	{
		$model = new TLoginForm;
		if($model->load(Yii::$app->request->post()))
		{
			//$user = new Tlogindatabase();
			$query = Tlogindatabase::find()->where(['username' => $model->username])->one();
			$passwd = $query->password;
			if($passwd == $model->password){
				return $this->render('login-successful',['model'=>$model]);
			}
			return $this->render('error',['model'=>$model,'passwd'=>$passwd]);
		}else{
			return $this->render('login',['model'=>$model]);
		}
	}
	/*
	public function actionDatabase()
	{
		$query = Tlogindatabase::find();
		$password = $query->orderBy('username');
		return ;
	}
	*/
	
	
	
	
	
	
	
	
	
	
	
	
	
	
}