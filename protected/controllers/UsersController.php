<?php

class UsersController extends Controller
{
	public function actionIndex()
	{
		$model = new Users;

	    if(isset($_POST['Users']))
	    {
	    	$model->attributes = $_POST['Users'];
	    	$model->role = "guest";
	    	
	    	$model->password = md5($_POST['Users']['password']);
	    	$model->password_repeat = md5($_POST['Users']['password_repeat']);

	    	if($model->save())
	    	{
	    		$this->redirect(array('site/login'));
	    	}
	    }


	    $this->render('index',array('model'=>$model));
	    //$this->render('example',array('model'=>$model));
	}

	public function filters() 
	{
		return array(
			'accessControl',
			);
	}

	public function accessRules()
	{
		return array(
			array('allow',
				'actions'=>array('view'),
				'roles'=>array('guest')
				),
			);
	}


	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}