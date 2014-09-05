<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	$model->id_sala,
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Create Sala', 'url'=>array('create')),
	array('label'=>'Update Sala', 'url'=>array('update', 'id'=>$model->id_sala)),
	array('label'=>'Delete Sala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_sala),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>View Sala #<?php echo $model->id_sala; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_sala',
		'nombre_sala',
	),
)); ?>
