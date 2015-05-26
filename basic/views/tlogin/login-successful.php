<?php
use yii\helpers\Html;
?>
<p>You have entered the following information:</p>

<ul>
    <li><label>Name</label>: <?= Html::encode($model->username) ?></li>
    <li><label>Password</label>: <?= Html::encode($model->password) ?></li>
    <li><label>VerifyCode</label>: <?= Html::encode($model->verifycode) ?></li>
</ul>