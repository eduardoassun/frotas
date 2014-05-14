<?php
/* @var $this DadosAquisicaoController */
/* @var $model DadosAquisicao */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'dados-aquisicao-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
        
        <div class="row">
		<?php echo $form->labelEx($model,'data_aquisicao'); ?>
		<?php echo $form->textField($model,'data_aquisicao'); ?>
		<?php echo $form->error($model,'data_aquisicao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'valor_nf'); ?>
		<?php echo $form->textField($model,'valor_nf'); ?>
		<?php echo $form->error($model,'valor_nf'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quant_parcelas'); ?>
		<?php echo $form->textField($model,'quant_parcelas'); ?>
		<?php echo $form->error($model,'quant_parcelas'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'garantia_anos'); ?>
		<?php echo $form->textField($model,'garantia_anos'); ?>
		<?php echo $form->error($model,'garantia_anos'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'intervalo_revisao'); ?>
		<?php echo $form->textField($model,'intervalo_revisao'); ?>
		<?php echo $form->error($model,'intervalo_revisao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quant_limite'); ?>
		<?php echo $form->textField($model,'quant_limite'); ?>
		<?php echo $form->error($model,'quant_limite'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lancar_odometro'); ?>
		<?php echo $form->textField($model,'lancar_odometro'); ?>
		<?php echo $form->error($model,'lancar_odometro'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recomendacoes_fabricante'); ?>
		<?php echo $form->textArea($model,'recomendacoes_fabricante',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'recomendacoes_fabricante'); ?>
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
		<?php echo $form->labelEx($veiculos,'placa'); ?>
		<?php echo $form->textField($veiculos,'placa'); ?>
		<?php echo $form->error($veiculos,'placa'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'descricao'); ?>
		<?php echo $form->textArea($veiculos,'descricao',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($veiculos,'descricao'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'categoria'); ?>
		<?php echo $form->textField($veiculos,'categoria',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($veiculos,'categoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'ano_modelo'); ?>
		<?php echo $form->textField($veiculos,'ano_modelo',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($veiculos,'ano_modelo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'quilometragem'); ?>
		<?php echo $form->textField($veiculos,'quilometragem'); ?>
		<?php echo $form->error($veiculos,'quilometragem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'renavam'); ?>
		<?php echo $form->textField($veiculos,'renavam',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($veiculos,'renavam'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($veiculos,'chassi'); ?>
		<?php echo $form->textField($veiculos,'chassi',array('size'=>25,'maxlength'=>25)); ?>
		<?php echo $form->error($veiculos,'chassi'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($frotas,'idfrotas'); ?>
		<?php
                    $Frotas = Frotas::model()->findAll(array('order' => 'nome ASC'));
                    $Frotas = CHtml::listData($Frotas, 'idfrotas', 'nome');

                    echo $form->dropDownList($frotas, 'idfrotas', $Frotas,
                        array(
                            'prompt' => 'Selecione',
                        )
                    );
                ?>
		<?php echo $form->error($frotas,'idfrotas'); ?>
	</div>

	
        
	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->