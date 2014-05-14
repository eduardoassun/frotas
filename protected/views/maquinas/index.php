<?php
/* @var $this MaquinasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Maquinases',
);

$this->menu=array(
	array('label'=>'Create Maquinas', 'url'=>array('create')),
	array('label'=>'Manage Maquinas', 'url'=>array('admin')),
);
?>

<h1>Maquinases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
