<?php
/* @var $this DadosAquisicaoController */
/* @var $model DadosAquisicao */

$this->breadcrumbs=array(
	'Dados Aquisicaos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DadosAquisicao', 'url'=>array('index')),
	array('label'=>'Manage DadosAquisicao', 'url'=>array('admin')),
);
?>

<h1>Create DadosAquisicao</h1>

<?php $this->renderPartial('_form', array('model'=>$model, 'veiculos'=>$veiculos, 'frotas'=>$frotas)); ?>