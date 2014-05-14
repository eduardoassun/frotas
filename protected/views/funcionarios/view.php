<?php
/* @var $this FuncionariosController */
/* @var $model Funcionarios */

$this->breadcrumbs=array(
	'Funcionarioses'=>array('index'),
	$model->idfuncionarios,
);

$this->menu=array(
	array('label'=>'List Funcionarios', 'url'=>array('index')),
	array('label'=>'Create Funcionarios', 'url'=>array('create')),
	array('label'=>'Update Funcionarios', 'url'=>array('update', 'id'=>$model->idfuncionarios)),
	array('label'=>'Manage Funcionarios', 'url'=>array('admin')),
);
?>

<h1>View Funcionarios #<?php echo $model->idfuncionarios; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idfuncionarios',
		'nome',
		'sexo',
		'endereco',
		'telefone',
		'celular',
		'cpf',
		'data_nascimento',
		'email',
		'data_cadastro',
		'hora_cadastro',
		'status_cadastro',
		'idempresa',
		'idcargo',
	),
)); ?>
