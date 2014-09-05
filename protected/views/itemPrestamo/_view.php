<?php
/* @var $this ItemPrestamoController */
/* @var $data ItemPrestamo */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_item')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_item), array('view', 'id'=>$data->id_item)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_item')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_item); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />


</div>