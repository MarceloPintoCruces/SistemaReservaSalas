<?php
/* @var $this ReservaSalaController */
/* @var $model ReservaSala */

$this->breadcrumbs=array(
	'Reserva Salas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReservaSala', 'url'=>array('index')),
	array('label'=>'Manage ReservaSala', 'url'=>array('admin')),
);
?>

<h1>Create ReservaSala</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>