<?php
/* @var $this CargoController */
/* @var $model Cargo */

$this->breadcrumbs=array(
	'Cargos'=>array('index'),
	$model->idcargo,
);

$this->menu=array(
	array('label'=>'List Cargo', 'url'=>array('index')),
	array('label'=>'Create Cargo', 'url'=>array('create')),
	array('label'=>'Update Cargo', 'url'=>array('update', 'id'=>$model->idcargo)),
	array('label'=>'Manage Cargo', 'url'=>array('admin')),
);
?>

<h1>View Cargo #<?php echo $model->idcargo; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idcargo',
		'nome',
		'nivel',
		'status_cadastro',
		'data_cadastro',
		'hora_cadastro',
		'idempresa',
	),
)); ?>
