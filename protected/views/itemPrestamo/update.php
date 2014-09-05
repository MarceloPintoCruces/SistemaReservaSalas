<?php
/* @var $this ItemPrestamoController */
/* @var $model ItemPrestamo */

$this->breadcrumbs=array(
	'Item Prestamos'=>array('index'),
	$model->id_item=>array('view','id'=>$model->id_item),
	'Update',
);

$this->menu=array(
	array('label'=>'List ItemPrestamo', 'url'=>array('index')),
	array('label'=>'Create ItemPrestamo', 'url'=>array('create')),
	array('label'=>'View ItemPrestamo', 'url'=>array('view', 'id'=>$model->id_item)),
	array('label'=>'Manage ItemPrestamo', 'url'=>array('admin')),
);
?>

<h1>Update ItemPrestamo <?php echo $model->id_item; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>