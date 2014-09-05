<?php
/* @var $this SalaController */
/* @var $model Sala */

$this->breadcrumbs=array(
	'Salas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Sala', 'url'=>array('index')),
	array('label'=>'Manage Sala', 'url'=>array('admin')),
);
?>

<h1>Create Sala</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>