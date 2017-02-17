<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
$form = ActiveForm::begin();
echo $form->field($model,'name')->textInput();
echo $form->field($model,'logo')->textInput();
echo $form->field($model,'intro')->textarea();
echo $form->field($model,'sort');
echo $form->field($model,'status')->dropDownList([0=>'隐藏',1=>'显示'],['prompt'=>'请选择']);
echo Html::submitInput('提交',['class'=>'btn btn-success','style'=>'margin-right:20px']);
echo Html::resetInput('重置',['class'=>'btn btn-danger']);
ActiveForm::end();

