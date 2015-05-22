<?php
namespace app\models;

use Yii;
use yii\base\Model;


class TLoginForm extends Model
{
	public $username;
	public $password;
	public $captcha;
	
	public function rules()
	{
		return [
//			[['username','password','captcha'],'required'],
			['username','required','message'=> 'Please input username'],
			['password','required','message'=>'Please input password'],
			['captcha','required','message'=>'please input captcha'],
			['captcha','captcha'],
		];
	}
	
}