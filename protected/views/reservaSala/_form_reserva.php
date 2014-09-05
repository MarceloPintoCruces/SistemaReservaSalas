<?php
/* @var $this ReservaSalaController */
/* @var $model ReservaSala */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reserva-sala-_form_reserva-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// See class documentation of CActiveForm for details on this,
	// you need to use the performAjaxValidation()-method described there.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id_sala'); ?>
		<?php echo $form->textField($model,'id_sala'); ?>
		<?php echo $form->error($model,'id_sala'); ?>
	</div>

	<div class="row">
		<?php

			$horaDevolucion = date('Y');
			echo '
				<p>
					Debe entregar la sala a las '.$horaDevolucion.'

				</p>

			';


		?>
		
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Submit'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->