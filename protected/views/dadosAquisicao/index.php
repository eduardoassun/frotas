<?php
/* @var $this DadosAquisicaoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Dados Aquisicaos',
);

$this->menu=array(
	array('label'=>'Create DadosAquisicao', 'url'=>array('create')),
	array('label'=>'Manage DadosAquisicao', 'url'=>array('admin')),
);
?>

<h1>Dados Aquisicaos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
