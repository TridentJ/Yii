<?php
namespace app\models;
use yii\db\ActiveRecord;

class Tlogindatabase extends ActiveRecord
{
	//table name is yii_user,so overwrite method:tableName
	public static function tableName()
	{
		return 'yii_user';
	}
}