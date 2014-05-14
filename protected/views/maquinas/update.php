<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */

$this->breadcrumbs=array(
	'Maquinases'=>array('index'),
	$model->numero_serie=>array('view','id'=>$model->numero_serie),
	'Update',
);

$this->menu=array(
	array('label'=>'List Maquinas', 'url'=>array('index')),
	array('label'=>'Create Maquinas', 'url'=>array('create')),
	array('label'=>'View Maquinas', 'url'=>array('view', 'id'=>$model->numero_serie)),
	array('label'=>'Manage Maquinas', 'url'=>array('admin')),
);
?>

<h1>Update Maquinas <?php echo $model->numero_serie; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>