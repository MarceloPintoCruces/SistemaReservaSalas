<?php
/* @var $this ItemPrestamoController */
/* @var $model ItemPrestamo */

$this->breadcrumbs=array(
	'Item Prestamos'=>array('index'),
	$model->id_item,
);

$this->menu=array(
	array('label'=>'List ItemPrestamo', 'url'=>array('index')),
	array('label'=>'Create ItemPrestamo', 'url'=>array('create')),
	array('label'=>'Update ItemPrestamo', 'url'=>array('update', 'id'=>$model->id_item)),
	array('label'=>'Delete ItemPrestamo', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id_item),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ItemPrestamo', 'url'=>array('admin')),
);
?>

<h1>View ItemPrestamo #<?php echo $model->id_item; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id_item',
		'nombre_item',
		'descripcion',
	),
)); ?>
