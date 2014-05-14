<?php
/* @var $this VeiculosController */
/* @var $model Veiculos */

$this->breadcrumbs=array(
	'Veiculoses'=>array('index'),
	$model->placa,
);

$this->menu=array(
	array('label'=>'List Veiculos', 'url'=>array('index')),
	array('label'=>'Create Veiculos', 'url'=>array('create')),
	array('label'=>'Update Veiculos', 'url'=>array('update', 'id'=>$model->placa)),
	array('label'=>'Delete Veiculos', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->placa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Veiculos', 'url'=>array('admin')),
);
?>

<h1>View Veiculos #<?php echo $model->placa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'placa',
		'descricao',
		'categoria',
		'ano_modelo',
		'quilometragem',
		'renavam',
		'chassi',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
		'idfrotas',
		'iddados_aquisicao',
	),
)); ?>
