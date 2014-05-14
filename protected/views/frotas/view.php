<?php
/* @var $this FrotasController */
/* @var $model Frotas */

$this->breadcrumbs=array(
	'Frotases'=>array('index'),
	$model->idfrotas,
);

$this->menu=array(
	array('label'=>'List Frotas', 'url'=>array('index')),
	array('label'=>'Create Frotas', 'url'=>array('create')),
	array('label'=>'Update Frotas', 'url'=>array('update', 'id'=>$model->idfrotas)),
	array('label'=>'Manage Frotas', 'url'=>array('admin')),
);
?>

<h1>View Frotas #<?php echo $model->idfrotas; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfrotas',
		'nome',
		'descricao',
		'objetivo',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
		'idempresa',
	),
)); ?>
