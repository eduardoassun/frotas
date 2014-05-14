<?php
/* @var $this DadosAquisicaoController */
/* @var $model DadosAquisicao */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'iddados_aquisicao'); ?>
		<?php echo $form->textField($model,'iddados_aquisicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'data_aquisicao'); ?>
		<?php echo $form->textField($model,'data_aquisicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'valor_nf'); ?>
		<?php echo $form->textField($model,'valor_nf'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quant_parcelas'); ?>
		<?php echo $form->textField($model,'quant_parcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'garantia_anos'); ?>
		<?php echo $form->textField($model,'garantia_anos'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'intervalo_revisao'); ?>
		<?php echo $form->textField($model,'intervalo_revisao'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quant_limite'); ?>
		<?php echo $form->textField($model,'quant_limite'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lancar_odometro'); ?>
		<?php echo $form->textField($model,'lancar_odometro'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recomendacoes_fabricante'); ?>
		<?php echo $form->textArea($model,'recomendacoes_fabricante',array('rows'=>6, 'cols'=>50)); ?>
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

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->