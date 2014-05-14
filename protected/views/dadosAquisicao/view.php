<?php
/* @var $this DadosAquisicaoController */
/* @var $model DadosAquisicao */

$this->breadcrumbs=array(
	'Dados Aquisicaos'=>array('index'),
	$model->iddados_aquisicao,
);

$this->menu=array(
	array('label'=>'List DadosAquisicao', 'url'=>array('index')),
	array('label'=>'Create DadosAquisicao', 'url'=>array('create')),
	array('label'=>'Update DadosAquisicao', 'url'=>array('update', 'id'=>$model->iddados_aquisicao)),
	array('label'=>'Delete DadosAquisicao', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->iddados_aquisicao),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DadosAquisicao', 'url'=>array('admin')),
);
?>

<h1>View DadosAquisicao #<?php echo $model->iddados_aquisicao; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'iddados_aquisicao',
		'data_aquisicao',
		'valor_nf',
		'quant_parcelas',
		'garantia_anos',
		'intervalo_revisao',
		'quant_limite',
		'lancar_odometro',
		'recomendacoes_fabricante',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
	),
)); ?>
