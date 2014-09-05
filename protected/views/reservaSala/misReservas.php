<h1>Mis Reservas</h1>


<?php 
$this->menu=array(
	array('label'=>'Reservar Sala', 'url'=>array('reservaSala')),
);


$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'reserva-sala-grid',
	'dataProvider'=>$model->searchByRut(Yii::app()->user->name),
	'filter'=>$model,
	'columns'=>array(
		'id_sala',
		'id_reserva',
		'fecha_inicio',
		'fecha_fin',
		'fecha_entrega',
         array(
            'class' => 'CButtonColumn',
            'template'=>'{EntregarSala}', // botones a mostrar
            'buttons'=>array(
			'EntregarSala' => array( //botón para la acción nueva
		    'label'=>'Entregar Sala', // titulo del enlace del botón nuevo
		    'url'=>'Yii::app()->createUrl("/reservasala/entregar&id_reserva=$data->id_reserva")', //url de la acción nueva
		    'visible'=>'($data->fecha_entrega===null)?true:false;'
		    ),
			),
          ),
	),
)); ?>