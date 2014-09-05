<?php

class ReservaSalaController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
    public function filters()
    {
      return array(array('CrugeAccessControlFilter'));
    }

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update', 'reservasala'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	public function actionReservaSala()
	{
		$model=new Sala;

		$this->render('reservaSala',array(
			'model'=>$model,
		));
	}


	public function actionReservar($id)
	{

		$model = new ReservaSala;
		$user_name = Yii::app()->user->name;

		$model->id_sala = $id;
		$model->rut = Yii::app()->user->name;

		if($model->save()){
			$this->redirect(array('postReserva','id_reserva'=>$model->id_reserva));
		} 
	}

	public function actionEntregar($id_reserva)
	{
		Yii::app()->db->createCommand('call SET_ENTREGAS('.$id_reserva.')')->execute();
		$this->redirect(array('misReservas'));
	}

	public function actionPostReserva($id_reserva)
	{
		$model = new ItemPrestamo;

		if(isset($_POST["items-prestamo"])){

			foreach ($_POST["items-prestamo"] as $value) {
				$model_reserva_prestamo = new ReservaPrestamo;
				$model_reserva_prestamo->id_reserva = $id_reserva;
				$model_reserva_prestamo->id_item = $value;
				$model_reserva_prestamo->save();
			}

			//generar pdf

			$reserva = ReservaSala::model()->findByPk($id_reserva);
			$rut = $reserva->rut;
			$sala = $reserva->idSala->nombre_sala; //relations
			$fecha_prestamo = $reserva->fecha_inicio;
			$fecha_entrega = $reserva->fecha_fin;



			//alternativas
			/*
			$rut = Yii::app()->db->select('rut')->from('reserva_sala')->where('id_reserva = '.$id_reserva)->queryAll();
			$rut = $rut[0]['rut'];			

			*/

			$datos = array(
				'id_reserva' => $id_reserva,
				'rut_alumno' => $rut,
				'sala' => $sala,
				'fecha_prestamo' => $fecha_prestamo,
				'fecha_entrega' => $fecha_entrega, 
				);


			$pdf = Yii::createComponent('application.extensions.MPDF57.mpdf');
			$mpdf=new mPDF('win-1252','LETTER','','',15,15,25,12,5,7);
			$mpdf->WriteHTML($this->renderPartial('verPDF', array('datos'=>$datos), true));
			$mpdf->Output();			



		}else{
			$this->render('postReserva', array('model' => $model, 'id_reserva' => $id_reserva));
		}
	}

	public function actionMisReservas()
	{
		$model = new ReservaSala;

		$this->render('misReservas', array('model'=>$model));
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new ReservaSala;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReservaSala']))
		{
			$model->attributes=$_POST['ReservaSala'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_reserva));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['ReservaSala']))
		{
			$model->attributes=$_POST['ReservaSala'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id_reserva));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('ReservaSala');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new ReservaSala('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['ReservaSala']))
			$model->attributes=$_GET['ReservaSala'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return ReservaSala the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=ReservaSala::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param ReservaSala $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='reserva-sala-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
