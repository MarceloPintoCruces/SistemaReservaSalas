<h1>Agregando Ítems a la Reserva </h1>

<p>Seleccione los ítems a prestar:</p>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'item-prestamo-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'item-prestamo-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_item',
		'nombre_item',
		'descripcion',
			array(
     		'class'=>'CCheckBoxColumn',
     		'selectableRows' => 2,
     		'id'=>"items-prestamo",
     		'header'=>'Prestar',
     		'value'=> $model->id_item,
			),
	),
)); ?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Finalizar Reserva'); ?>
	</div>



<?php $this->endWidget(); ?>