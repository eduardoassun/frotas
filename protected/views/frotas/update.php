<?php
/* @var $this FrotasController */
/* @var $model Frotas */

$this->breadcrumbs=array(
	'Frotases'=>array('index'),
	$model->idfrotas=>array('view','id'=>$model->idfrotas),
	'Update',
);

$this->menu=array(
	array('label'=>'List Frotas', 'url'=>array('index')),
	array('label'=>'Create Frotas', 'url'=>array('create')),
	array('label'=>'View Frotas', 'url'=>array('view', 'id'=>$model->idfrotas)),
	array('label'=>'Manage Frotas', 'url'=>array('admin')),
);
?>

<h1>Update Frotas <?php echo $model->idfrotas; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>