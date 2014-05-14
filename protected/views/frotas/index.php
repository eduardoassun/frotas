<?php
/* @var $this FrotasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frotases',
);

$this->menu=array(
	array('label'=>'Create Frotas', 'url'=>array('create')),
	array('label'=>'Manage Frotas', 'url'=>array('admin')),
);
?>

<h1>Frotases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
