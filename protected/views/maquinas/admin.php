<?php
/* @var $this MaquinasController */
/* @var $model Maquinas */

$this->breadcrumbs=array(
	'Maquinases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Maquinas', 'url'=>array('index')),
	array('label'=>'Create Maquinas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#maquinas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Maquinases</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'maquinas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'numero_serie',
		'descricao',
		'categoria',
		'ano_modelo',
		'chassi',
		'data_cadastro',
		/*
		'hora_cadastro',
		'status_cadastro',
		'idfrotas',
		'iddados_aquisicao',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
