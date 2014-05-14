<?php
/* @var $this VeiculosController */
/* @var $data Veiculos */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('placa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->placa), array('view', 'id'=>$data->placa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoria')); ?>:</b>
	<?php echo CHtml::encode($data->categoria); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ano_modelo')); ?>:</b>
	<?php echo CHtml::encode($data->ano_modelo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quilometragem')); ?>:</b>
	<?php echo CHtml::encode($data->quilometragem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('renavam')); ?>:</b>
	<?php echo CHtml::encode($data->renavam); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('chassi')); ?>:</b>
	<?php echo CHtml::encode($data->chassi); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->data_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->hora_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->status_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfrotas')); ?>:</b>
	<?php echo CHtml::encode($data->idfrotas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('iddados_aquisicao')); ?>:</b>
	<?php echo CHtml::encode($data->iddados_aquisicao); ?>
	<br />

	*/ ?>

</div>