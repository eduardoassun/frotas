<?php
/* @var $this FrotasController */
/* @var $model Frotas */

$this->breadcrumbs=array(
	'Frotases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Frotas', 'url'=>array('index')),
	array('label'=>'Manage Frotas', 'url'=>array('admin')),
);
?>

<h1>Create Frotas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>