<?php
/* @var $this EmpresaController */
/* @var $model Empresa */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'empresa-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nome_fantasia'); ?>
		<?php echo $form->textField($model,'nome_fantasia',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'nome_fantasia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'razao_social'); ?>
		<?php echo $form->textField($model,'razao_social',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'razao_social'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'responsavel_proprietario'); ?>
		<?php echo $form->textField($model,'responsavel_proprietario',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'responsavel_proprietario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'endereco'); ?>
		<?php echo $form->textField($model,'endereco',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'endereco'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'estado'); ?>
		<?php echo $form->textField($model,'estado',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'estado'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cidade'); ?>
		<?php echo $form->textField($model,'cidade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'cidade'); ?>
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
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>75)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cnpj'); ?>
		<?php echo $form->textField($model,'cnpj',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'cnpj'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inscricao_estadual'); ?>
		<?php echo $form->textField($model,'inscricao_estadual',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'inscricao_estadual'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'inscricao_municipal'); ?>
		<?php echo $form->textField($model,'inscricao_municipal',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'inscricao_municipal'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'atividade'); ?>
		<?php echo $form->textField($model,'atividade',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'atividade'); ?>
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