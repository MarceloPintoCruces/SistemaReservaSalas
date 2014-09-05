<?php
/* @var $this SalaController */
/* @var $data Sala */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_sala')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_sala), array('view', 'id'=>$data->id_sala)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_sala')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_sala); ?>
	<br />


</div>