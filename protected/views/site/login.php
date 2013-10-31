<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<div class="form">
	<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
		'id'=>'login-form',
		'enableClientValidation'=>true,
		'clientOptions'=>array(
			'validateOnSubmit'=>true,
		),
	)); ?>

		<p class="note">Поля, помеченные <span class="required">*</span> обязательны для заполнения.</p>

		<div class="row">
			<?php echo $form->textFieldRow($model,'username'); ?>
			<?php echo $form->error($model,'username'); ?>
		</div>

		<div class="row">
			<?php echo $form->passwordFieldRow($model,'password'); ?>
			<?php echo $form->error($model,'password'); ?>
		</div>

		<?php echo $form->checkBoxRow($model,'rememberMe'); ?>
		<?php echo $form->error($model,'rememberMe'); ?>

		<div class="row buttons">
			<?php echo CHtml::submitButton('Login'); ?>
		</div>

		 <div class="row buttons">
			<!--
			<?php $this->widget('bootstrap.widgets.TbButton', array(
				'label'=>'Войти',
			    'type'=>'primary', // null, 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
			    'size'=>'normal', // null, 'large', 'small' or 'mini'
			)); ?>
			-->
			<div class="row"><?php echo "или можете ".CHtml::link('зарегистрироваться', array('Register/index')); ?></div>
		</div>
		

<?php $this->endWidget(); ?>
</div><!-- form -->
