<?php
/* @var $this ItemPrestamoController */
/* @var $model ItemPrestamo */

$this->breadcrumbs=array(
	'Item Prestamos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ItemPrestamo', 'url'=>array('index')),
	array('label'=>'Manage ItemPrestamo', 'url'=>array('admin')),
);
?>

<h1>Create ItemPrestamo</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>