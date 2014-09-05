<?php
/* @var $this ReservaSalaController */
/* @var $data ReservaSala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_reserva')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_reserva), array('view', 'id'=>$data->id_reserva)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::encode($data->rut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sala')); ?>:</b>
	<?php echo CHtml::encode($data->id_sala); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_inicio')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_inicio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_fin')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_fin); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_entrega')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_entrega); ?>
	<br />


</div>