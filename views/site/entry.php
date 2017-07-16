<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\jui\DatePicker;

?>

<?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'name')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'email') ?>

        <p>
        <?php
        echo DatePicker::widget([
		    'language' => 'zh-CN',
		    'name'  => 'country',
		    'clientOptions' => [
		        'dateFormat' => 'yy-mm-dd',
		    ],
		]);
		?>
		
		</p>

        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>

<?php ActiveForm::end(); ?>