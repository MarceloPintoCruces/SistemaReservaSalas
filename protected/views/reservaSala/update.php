<?php
/* @var $this ReservaSalaController */
/* @var $model ReservaSala */

$this->breadcrumbs=array(
	'Reserva Salas'=>array('index'),
	$model->id_reserva=>array('view','id'=>$model->id_reserva),
	'Update',
);

$this->menu=array(
	array('label'=>'List ReservaSala', 'url'=>array('index')),
	array('label'=>'Create ReservaSala', 'url'=>array('create')),
	array('label'=>'View ReservaSala', 'url'=>array('view', 'id'=>$model->id_reserva)),
	array('label'=>'Manage ReservaSala', 'url'=>array('admin')),
);
?>

<h1>Update ReservaSala <?php echo $model->id_reserva; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>