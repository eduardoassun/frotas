<?php
/* @var $this DadosAquisicaoController */
/* @var $model DadosAquisicao */

$this->breadcrumbs=array(
	'Dados Aquisicaos'=>array('index'),
	$model->iddados_aquisicao=>array('view','id'=>$model->iddados_aquisicao),
	'Update',
);

$this->menu=array(
	array('label'=>'List DadosAquisicao', 'url'=>array('index')),
	array('label'=>'Create DadosAquisicao', 'url'=>array('create')),
	array('label'=>'View DadosAquisicao', 'url'=>array('view', 'id'=>$model->iddados_aquisicao)),
	array('label'=>'Manage DadosAquisicao', 'url'=>array('admin')),
);
?>

<h1>Update DadosAquisicao <?php echo $model->iddados_aquisicao; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>