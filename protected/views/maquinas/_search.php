<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'numero_serie'); ?>
		<?php echo $form->textField($model,'numero_serie'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ano_modelo'); ?>
		<?php echo $form->textField($model,'ano_modelo',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'chassi'); ?>
		<?php echo $form->textField($model,'chassi',array('size'=>25,'maxlength'=>25)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_cadastro'); ?>
		<?php echo $form->textField($model,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hora_cadastro'); ?>
		<?php echo $form->textField($model,'hora_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status_cadastro'); ?>
		<?php echo $form->textField($model,'status_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'idfrotas'); ?>
		<?php echo $form->textField($model,'idfrotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'iddados_aquisicao'); ?>
		<?php echo $form->textField($model,'iddados_aquisicao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->