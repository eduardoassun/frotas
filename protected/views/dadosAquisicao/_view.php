<?php
/* @var $this DadosAquisicaoController */
/* @var $data DadosAquisicao */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddados_aquisicao')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iddados_aquisicao), array('view', 'id'=>$data->iddados_aquisicao)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_aquisicao')); ?>:</b>
	<?php echo CHtml::encode($data->data_aquisicao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valor_nf')); ?>:</b>
	<?php echo CHtml::encode($data->valor_nf); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quant_parcelas')); ?>:</b>
	<?php echo CHtml::encode($data->quant_parcelas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('garantia_anos')); ?>:</b>
	<?php echo CHtml::encode($data->garantia_anos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('intervalo_revisao')); ?>:</b>
	<?php echo CHtml::encode($data->intervalo_revisao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quant_limite')); ?>:</b>
	<?php echo CHtml::encode($data->quant_limite); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lancar_odometro')); ?>:</b>
	<?php echo CHtml::encode($data->lancar_odometro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recomendacoes_fabricante')); ?>:</b>
	<?php echo CHtml::encode($data->recomendacoes_fabricante); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->data_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->hora_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->status_cadastro); ?>
	<br />

	*/ ?>

</div>