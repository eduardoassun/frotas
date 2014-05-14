<?php
/* @var $this FuncionariosController */
/* @var $model Funcionarios */

$this->breadcrumbs=array(
	'Funcionarioses'=>array('index'),
	$model->idfuncionarios=>array('view','id'=>$model->idfuncionarios),
	'Update',
);

$this->menu=array(
	array('label'=>'List Funcionarios', 'url'=>array('index')),
	array('label'=>'Create Funcionarios', 'url'=>array('create')),
	array('label'=>'View Funcionarios', 'url'=>array('view', 'id'=>$model->idfuncionarios)),
	array('label'=>'Manage Funcionarios', 'url'=>array('admin')),
);
?>

<h1>Update Funcionarios <?php echo $model->idfuncionarios; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>