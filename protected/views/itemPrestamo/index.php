<?php
/* @var $this ItemPrestamoController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Item Prestamos',
);

$this->menu=array(
	array('label'=>'Create ItemPrestamo', 'url'=>array('create')),
	array('label'=>'Manage ItemPrestamo', 'url'=>array('admin')),
);
?>

<h1>Item Prestamos</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
