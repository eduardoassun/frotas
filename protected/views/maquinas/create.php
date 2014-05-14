<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */

$this->breadcrumbs=array(
	'Maquinases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Maquinas', 'url'=>array('index')),
	array('label'=>'Manage Maquinas', 'url'=>array('admin')),
);
?>

<h1>Create Maquinas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>