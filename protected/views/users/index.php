<?php
/* @var $this UsersController */

$this->breadcrumbs=array(
	'Users',
); ?>

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

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->textFieldRow($model, 'name'); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->textFieldRow($model, 'login'); ?>
		<?php echo $form-> error($model, 'login')?>
	</div>

	<div class="row">
		<?php echo $form->passwordFieldRow($model,'password'); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->passwordFieldRow($model,'password_repeat',array('size'=>20,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password_repeat'); ?>
	</div>

	<div>
		<?php echo $form->textFieldRow($model, 'email'); ?>
		<?php echo $form->error($model, 'email') ?>
	</div>


	<div class="row buttons">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'label'=>'Зарегистрироваться',
		    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
		    'size'=>'normal', // null, 'large', 'small' or 'mini'
		)); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
