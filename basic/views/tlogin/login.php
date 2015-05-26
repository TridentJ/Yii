<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\captcha\Captcha;
?>


<?php $form = ActiveForm::begin(); ?>
	<?= $form->field($model,'username')/*->textInput(['class'=>'form-group'])*/ ?>
	<?= $form->field($model,'password')->passwordInput()?> 
	<?= $form->field($model,'verifycode')->widget(Captcha::className(),['template'=>'<div class="row"><div class="col-lg-3">{image}
			</div class="col-lg-6">{input}</div></div>','imageOptions'=>['alt' => 'VerifyCode']])?>
	<div class="form-group">
		<?= Html::submitButton('submit',['class' => 'btn btn-primary'])?>
	</div>

<?php ActiveForm::end();?>