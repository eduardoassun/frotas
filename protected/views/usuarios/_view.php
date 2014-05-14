<?php
/* @var $this UsuariosController */
/* @var $data Usuarios */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuarios')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idusuarios), array('view', 'id'=>$data->idusuarios)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('senha')); ?>:</b>
	<?php echo CHtml::encode($data->senha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->status_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipo_usuario')); ?>:</b>
	<?php echo CHtml::encode($data->tipo_usuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('data_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->data_cadastro); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora_cadastro')); ?>:</b>
	<?php echo CHtml::encode($data->hora_cadastro); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('idfuncionarios')); ?>:</b>
	<?php echo CHtml::encode($data->idfuncionarios); ?>
	<br />

	*/ ?>

</div>