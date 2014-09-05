<?php
/* @var $this ReservaSalaController */
/* @var $model ReservaSala */

$this->breadcrumbs=array(
	'Reserva Salas'=>array('index'),
	$model->id_reserva,
);

$this->menu=array(
	array('label'=>'List ReservaSala', 'url'=>array('index')),
	array('label'=>'Create ReservaSala', 'url'=>array('create')),
	array('label'=>'Update ReservaSala', 'url'=>array('update', 'id'=>$model->id_reserva)),
	array('label'=>'Delete ReservaSala', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_reserva),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReservaSala', 'url'=>array('admin')),
);
?>

<h1>View ReservaSala #<?php echo $model->id_reserva; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'rut',
		'id_sala',
		'id_reserva',
		'fecha_inicio',
		'fecha_fin',
		'fecha_entrega',
	),
)); ?>
