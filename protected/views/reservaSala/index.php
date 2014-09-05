<?php
/* @var $this ReservaSalaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reserva Salas',
);

$this->menu=array(
	array('label'=>'Create ReservaSala', 'url'=>array('create')),
	array('label'=>'Manage ReservaSala', 'url'=>array('admin')),
);
?>

<h1>Reserva Salas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
