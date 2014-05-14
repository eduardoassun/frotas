<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'maquinas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'numero_serie'); ?>
		<?php echo $form->textField($model,'numero_serie'); ?>
		<?php echo $form->error($model,'numero_serie'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descricao'); ?>
		<?php echo $form->textArea($model,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'categoria'); ?>
		<?php echo $form->textField($model,'categoria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ano_modelo'); ?>
		<?php echo $form->textField($model,'ano_modelo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ano_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'chassi'); ?>
		<?php echo $form->textField($model,'chassi',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($model,'chassi'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_cadastro'); ?>
		<?php echo $form->textField($model,'data_cadastro'); ?>
		<?php echo $form->error($model,'data_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hora_cadastro'); ?>
		<?php echo $form->textField($model,'hora_cadastro'); ?>
		<?php echo $form->error($model,'hora_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status_cadastro'); ?>
		<?php echo $form->textField($model,'status_cadastro'); ?>
		<?php echo $form->error($model,'status_cadastro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idfrotas'); ?>
		<?php echo $form->textField($model,'idfrotas'); ?>
		<?php echo $form->error($model,'idfrotas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iddados_aquisicao'); ?>
		<?php echo $form->textField($model,'iddados_aquisicao'); ?>
		<?php echo $form->error($model,'iddados_aquisicao'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->