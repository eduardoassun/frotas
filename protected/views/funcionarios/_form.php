<?php
/* @var $this FuncionariosController */
/* @var $model Funcionarios */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'funcionarios-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome'); ?>
		<?php echo $form->textField($model,'nome',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefone'); ?>
		<?php echo $form->textField($model,'telefone',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cpf'); ?>
		<?php echo $form->textField($model,'cpf',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cpf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'data_nascimento'); ?>
		<?php echo $form->textField($model,'data_nascimento',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'data_nascimento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'email'); ?>
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
		<?php echo $form->labelEx($model,'idempresa'); ?>
		<?php echo $form->textField($model,'idempresa'); ?>
		<?php echo $form->error($model,'idempresa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'idcargo'); ?>
		<?php echo $form->textField($model,'idcargo'); ?>
		<?php echo $form->error($model,'idcargo'); ?>
	</div>
        
        <div class="row">
		<?php if($model->isNewRecord) {
                      echo $form->labelEx($usuarios,'login'); ?>
		<?php echo $form->textField($usuarios,'login'); ?>
		<?php echo $form->error($usuarios,'login'); 
                }                
                ?>
	</div>
        
        <div class="row">
		<?php if($model->isNewRecord) {
                      echo $form->labelEx($usuarios,'senha'); ?>
		<?php echo $form->textField($usuarios,'senha'); ?>
		<?php echo $form->error($usuarios,'senha'); 
                }
                ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->