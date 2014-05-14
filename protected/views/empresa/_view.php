<?php
/* @var $this EmpresaController */
/* @var $data Empresa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idempresa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idempresa), array('view', 'id'=>$data->idempresa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nome_fantasia')); ?>:</b>
	<?php echo CHtml::encode($data->nome_fantasia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('razao_social')); ?>:</b>
	<?php echo CHtml::encode($data->razao_social); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('responsavel_proprietario')); ?>:</b>
	<?php echo CHtml::encode($data->responsavel_proprietario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('endereco')); ?>:</b>
	<?php echo CHtml::encode($data->endereco); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estado')); ?>:</b>
	<?php echo CHtml::encode($data->estado); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cidade')); ?>:</b>
	<?php echo CHtml::encode($data->cidade); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('telefone')); ?>:</b>
	<?php echo CHtml::encode($data->telefone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cnpj')); ?>:</b>
	<?php echo CHtml::encode($data->cnpj); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inscricao_estadual')); ?>:</b>
	<?php echo CHtml::encode($data->inscricao_estadual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('inscricao_municipal')); ?>:</b>
	<?php echo CHtml::encode($data->inscricao_municipal); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('atividade')); ?>:</b>
	<?php echo CHtml::encode($data->atividade); ?>
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