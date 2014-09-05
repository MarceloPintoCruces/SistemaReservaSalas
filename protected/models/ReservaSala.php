<?php

/**
 * This is the model class for table "reserva_sala".
 *
 * The followings are the available columns in table 'reserva_sala':
 * @property string $rut
 * @property integer $id_sala
 * @property integer $id_reserva
 * @property string $fecha_inicio
 * @property string $fecha_fin
 * @property string $fecha_entrega
 *
 * The followings are the available model relations:
 * @property ReservaPrestamo[] $reservaPrestamos
 * @property Sala $idSala
 * @property Alumno $rut0
 */
class ReservaSala extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reserva_sala';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id_sala', 'numerical', 'integerOnly'=>true),
			array('rut', 'length', 'max'=>12),
			array('fecha_inicio, fecha_fin, fecha_entrega', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rut, id_sala, id_reserva, fecha_inicio, fecha_fin, fecha_entrega', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'reservaPrestamos' => array(self::HAS_MANY, 'ReservaPrestamo', 'id_reserva'),
			'idSala' => array(self::BELONGS_TO, 'Sala', 'id_sala'),
			'rut0' => array(self::BELONGS_TO, 'Alumno', 'rut'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'rut' => 'Rut',
			'id_sala' => 'Sala a Reservar',
			'id_reserva' => 'Id Reserva',
			'fecha_inicio' => 'Fecha Inicio',
			'fecha_fin' => 'Fecha Fin',
			'fecha_entrega' => 'Fecha Entrega',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut',$this->rut,true);
		$criteria->compare('id_sala',$this->id_sala);
		$criteria->compare('id_reserva',$this->id_reserva);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('fecha_entrega',$this->fecha_entrega,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function searchByRut($rut)
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('rut',$rut,true);
		$criteria->compare('id_sala',$this->id_sala);
		$criteria->compare('id_reserva',$this->id_reserva);
		$criteria->compare('fecha_inicio',$this->fecha_inicio,true);
		$criteria->compare('fecha_fin',$this->fecha_fin,true);
		$criteria->compare('fecha_entrega',$this->fecha_entrega,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}	

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReservaSala the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
