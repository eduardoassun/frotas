<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */

$this->breadcrumbs=array(
	'Maquinases'=>array('index'),
	$model->numero_serie,
);

$this->menu=array(
	array('label'=>'List Maquinas', 'url'=>array('index')),
	array('label'=>'Create Maquinas', 'url'=>array('create')),
	array('label'=>'Update Maquinas', 'url'=>array('update', 'id'=>$model->numero_serie)),
	array('label'=>'Delete Maquinas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->numero_serie),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Maquinas', 'url'=>array('admin')),
);
?>

<h1>View Maquinas #<?php echo $model->numero_serie; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'numero_serie',
		'descricao',
		'categoria',
		'ano_modelo',
		'chassi',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
		'idfrotas',
		'iddados_aquisicao',
	),
)); ?>
