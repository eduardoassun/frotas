<?php
/* @var $this EmpresaController */
/* @var $model Empresa */

$this->breadcrumbs=array(
	'Empresas'=>array('index'),
	$model->idempresa,
);

$this->menu=array(
	array('label'=>'List Empresa', 'url'=>array('index')),
	array('label'=>'Create Empresa', 'url'=>array('create')),
	array('label'=>'Update Empresa', 'url'=>array('update', 'id'=>$model->idempresa)),
	array('label'=>'Manage Empresa', 'url'=>array('admin')),
);
?>

<h1>View Empresa #<?php echo $model->idempresa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idempresa',
		'nome_fantasia',
		'razao_social',
		'responsavel_proprietario',
		'endereco',
		'estado',
		'cidade',
		'telefone',
		'celular',
		'email',
		'cnpj',
		'inscricao_estadual',
		'inscricao_municipal',
		'atividade',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
	),
)); ?>
