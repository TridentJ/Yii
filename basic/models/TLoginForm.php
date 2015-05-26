<?php
namespace app\models;

use Yii;
use yii\base\Model;


class TLoginForm extends Model
{
	public $username;
	public $password;
	public $verifycode;
	
	public function rules()
	{
		return [
//			[['username','password','captcha'],'required'],
			['username','required','message'=> 'Please input username'],
			['password','required','message'=>'Please input password'],
			['verifycode','required','message'=>'please input captcha'],
			['verifycode','captcha','message'=>'verifyCode is wrong'],
		];
	}
	
	public function attributeLabels()
	{
		return ['verifycode'=>'verification code'];
	}
	
}