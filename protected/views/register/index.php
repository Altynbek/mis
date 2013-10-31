<?php
/* @var $this RegisterController */

$this->breadcrumbs=array(
	'Register',
);
?>

<p>
	<div class="form">
	<?php $form = $this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'register-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>
	
	<h4>Для регистрации необходимо заполнить следующие поля</h4>

	<p class="note">Поля, помеченные <span class="required">*</span> обязательны для заполнения.</p>

	<?php echo $form->errorSummary($employeeModel); ?>
	<?php //echo $form->errorSummary($contactsModel); ?>
	<?php //echo $form->errorSummary($educationModel); ?>
	<?php //echo $form->errorSummary($jobInfoModel); ?>
	<?php //echo $form->errorSummary($passportModel); ?>
	<?php //echo $form->errorSummary($authModel); ?>


	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'lastName'); ?>
		<?php echo $form->error($employeeModel,'lastName'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'firstName'); ?>
		<?php echo $form-> error($employeeModel, 'firstName')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'middleName'); ?>
		<?php echo $form-> error($employeeModel, 'middleName')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'dateOfBirth'); ?>
		<?php echo $form-> error($employeeModel, 'dateOfBirth')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'placeOfBirth'); ?>
		<?php echo $form-> error($employeeModel, 'placeOfBirth')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($employeeModel, 'sex'); ?>
		<?php echo $form-> error($employeeModel, 'sex')?>
	</div>



	<div class="row">
		<?php echo $form->textFieldRow($contactsModel, 'phone'); ?>
		<?php echo $form-> error($contactsModel, 'phone')?>
	</div>
	<div class="row">
		<?php echo $form->textFieldRow($contactsModel, 'residence'); ?>
		<?php echo $form-> error($contactsModel, 'residence')?>
	</div>



	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'institution'); ?>
		<?php echo $form-> error($educationModel, 'institution')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'completionDate'); ?>
		<?php echo $form-> error($educationModel, 'completionDate')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'specialty'); ?>
		<?php echo $form-> error($educationModel, 'specialty')?>
	</div>
	
	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'numberOfDiploma'); ?>
		<?php echo $form-> error($educationModel, 'numberOfDiploma')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'citezenship'); ?>
		<?php echo $form-> error($educationModel, 'citezenship')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'advancedTraining'); ?>
		<?php echo $form-> error($educationModel, 'advancedTraining')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($educationModel, 'retraining'); ?>
		<?php echo $form-> error($educationModel, 'retraining')?>
	</div>



	<div class="row">
		<?php echo $form->textFieldRow($jobInfoModel, 'startDate'); ?>
		<?php echo $form-> error($jobInfoModel, 'startDate')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($jobInfoModel, 'isMainSpecialty'); ?>
		<?php echo $form-> error($jobInfoModel, 'isMainSpecialty')?>
	</div>



	<div class="row">
		<?php echo $form->textFieldRow($passportModel, 'issuedBy'); ?>
		<?php echo $form-> error($passportModel, 'issuedBy')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($passportModel, 'issueDate'); ?>
		<?php echo $form-> error($passportModel, 'issueDate')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($passportModel, 'passportNumber'); ?>
		<?php echo $form-> error($passportModel, 'passportNumber')?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($passportModel, 'passportSeries'); ?>
		<?php echo $form-> error($passportModel, 'passportSeries')?>
	</div>



	<div class="row">
		<?php echo $form->textFieldRow($authModel, 'login'); ?>
		<?php echo $form-> error($authModel, 'login')?>
	</div>

	<div class="row">
		<?php echo $form->passwordFieldRow($authModel, 'password'); ?>
		<?php echo $form-> error($authModel, 'password')?>
	</div>
	
	<div class="row">
		<?php echo $form->passwordFieldRow($authModel, 'password_repeat'); ?>
		<?php echo $form-> error($authModel, 'password_repeat')?>
	</div>
	
	<div class="row">
		<?php echo $form->textFieldRow($authModel, 'email'); ?>
		<?php echo $form-> error($authModel, 'email')?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Login'); ?>
	</div>


	<!--
	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Зарегистрироваться',
		    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		    'size'=>'normal', // null, 'large', 'small' or 'mini'
		    'buttonType'=>'submit',
		)); ?>
	</div>
	-->
<?php $this->endWidget(); ?>

</p>
