<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('rut')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->rut), array('view', 'id'=>$data->rut)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_alumno')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_alumno); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido_alumno')); ?>:</b>
	<?php echo CHtml::encode($data->apellido_alumno); ?>
	<br />


</div>