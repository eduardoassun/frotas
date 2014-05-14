<?php
/* @var $this FrotasController */
/* @var $data Frotas */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idfrotas')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idfrotas), array('view', 'id'=>$data->idfrotas)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome')); ?>:</b>
	<?php echo CHtml::encode($data->nome); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descricao')); ?>:</b>
	<?php echo CHtml::encode($data->descricao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('objetivo')); ?>:</b>
	<?php echo CHtml::encode($data->objetivo); ?>
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

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::encode($data->idempresa); ?>
	<br />

	*/ ?>

</div>