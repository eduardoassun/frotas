<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'veiculos-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'placa'); ?>
		<?php echo $form->textField($model,'placa'); ?>
		<?php echo $form->error($model,'placa'); ?>
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
		<?php echo $form->labelEx($model,'quilometragem'); ?>
		<?php echo $form->textField($model,'quilometragem'); ?>
		<?php echo $form->error($model,'quilometragem'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'renavam'); ?>
		<?php echo $form->textField($model,'renavam',array('size'=>15,'maxlength'=>15)); ?>
		<?php echo $form->error($model,'renavam'); ?>
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
	
        <div class="row">
		<?php echo $form->labelEx($dados,'data_aquisicao'); ?>
		<?php echo $form->textField($dados,'data_aquisicao'); ?>
		<?php echo $form->error($dados,'data_aquisicao'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($dados,'valor_nf'); ?>
		<?php echo $form->textField($dados,'valor_nf'); ?>
		<?php echo $form->error($dados,'valor_nf'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($dados,'quant_parcelas'); ?>
		<?php echo $form->textField($dados,'quant_parcelas'); ?>
		<?php echo $form->error($dados,'quant_parcelas'); ?>
	</div>
        
       
        <div class="row">
		<?php echo $form->labelEx($dados,'garantia_anos'); ?>
		<?php echo $form->textField($dados,'garantia_anos'); ?>
		<?php echo $form->error($dados,'garantia_anos'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($dados,'intervalo_revisao'); ?>
		<?php echo $form->textField($dados,'intervalo_revisao'); ?>
		<?php echo $form->error($dados,'intervalo_revisao'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($dados,'quant_limite'); ?>
		<?php echo $form->textField($dados,'quant_limite'); ?>
		<?php echo $form->error($dados,'quant_limite'); ?>
	</div>
         
        <div class="row">
		<?php echo $form->labelEx($dados,'lancar_odometro'); ?>
		<?php echo $form->textField($dados,'lancar_odometro'); ?>
		<?php echo $form->error($dados,'lancar_odometro'); ?>
	</div>
        
        <div class="row">
                <?php echo $form->labelEx($dados,'recomendacoes_fabricante'); ?>
                <?php echo $form->textArea($dados, 'recomendacoes_fabricante', array('rows'=>6, 'cols'=>50)); ?>
                <?php echo $form->error($dados,'recomendacoes_fabricante'); ?>
	</div>
        </div>
        
        <div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->