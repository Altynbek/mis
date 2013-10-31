<?php

class RegisterController extends Controller
{
	public function actionIndex()
	{
		$errorCode = 0;

		$employeeModel = new Employee();
		$contactsModel = new Contacts();
		$educationModel = new Education();
		$jobInfoModel = new Jobinfo();
		$passportModel = new Passport();
		$authModel = new Authdata();

		if( isset($_POST['Employee']) &&
			isset($_POST['Contacts']) && 
			isset($_POST['Education']) && 
			isset($_POST['Jobinfo']) && 
			isset($_POST['Passport']) && 
			isset($_POST['Authdata']))
			
		{
			$employeeModel->attributes = $_POST['Employee'];
			if(!$employeeModel->save())
			{
	    		$errorCode = 1;
	    	}

			$contactsModel->attributes = $_POST['Contacts'];
			$contactsModel->employee_idEmployee = $employeeModel->idEmployee;
			if(!$contactsModel->save())
			{
	    		$errorCode = 1;
	    	}


			$educationModel->attributes = $_POST['Education'];
			$educationModel->employee_idEmployee = $employeeModel->idEmployee;
			if(!$educationModel->save())
			{
	    		$errorCode = 1;
	    	}
	    	

			$jobInfoModel->attributes = $_POST['Jobinfo'];
			$jobInfoModel->employee_idEmployee = $employeeModel->idEmployee;
	    	if(!$jobInfoModel->save())
	    	{
	    		$errorCode = 1;
	    	}
	    	

			$passportModel->attributes = $_POST['Passport'];
			$passportModel->employee_idEmployee = $employeeModel->idEmployee;
			if(!$passportModel->save())
			{
	    		$errorCode = 1;
	    	}

	
			$authModel->attributes = $_POST['Authdata'];
			$authModel->role = "guest";
	    	$authModel->password = md5($_POST['Authdata']['password']);
	    	$authModel->password_repeat = md5($_POST['Authdata']['password_repeat']);	    		
	    	$authModel->employee_idEmployee = $employeeModel->idEmployee;
	    	if(!$authModel->save())
	    	{
	    		$errorCode = 1;
	    	}
	    	
	    	if($errorCode == 0)
	    	{
	    		$this->redirect(array('site/login'));
	    	}
			
		}

		$this->render('index', array('employeeModel'=>$employeeModel, 
									 'contactsModel'=>$contactsModel, 
									 'educationModel'=>$educationModel,
									 'jobInfoModel'=>$jobInfoModel,
									 'passportModel'=>$passportModel,
									 'authModel'=>$authModel));
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