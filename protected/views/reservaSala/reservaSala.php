<?php
/* @var $this ReservaSalaController */
/* @var $model ReservaSala */

$this->breadcrumbs=array(
	'Reserva Salas'=>array('index'),
	'Create',
);

/*$this->menu=array(
	array('label'=>'List ReservaSala', 'url'=>array('index')),
	array('label'=>'Manage ReservaSala', 'url'=>array('admin')),
);*/
?>

<h1>Reservando Sala</h1>

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reserva-sala-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id_sala',
		'nombre_sala',
		'estado',
         array(
            'class' => 'CButtonColumn',
            'template'=>'{Reservar}', // botones a mostrar
            'buttons'=>array(
			'Reservar' => array( //botón para la acción nueva
		    'label'=>'Reservar', // titulo del enlace del botón nuevo
		    'url'=>'Yii::app()->createUrl("/reservasala/reservar&id=$data->id_sala")', //url de la acción nueva
		    'visible'=>'($data->estado==="DISPONIBLE")?true:false;'
		    ),
			),
          ),
	),
)); ?>