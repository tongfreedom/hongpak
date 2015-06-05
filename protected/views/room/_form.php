<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'room-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'r_id'); ?>
		<?php echo $form->textField($model,'r_id'); ?>
		<?php echo $form->error($model,'r_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'r_name'); ?>
		<?php echo $form->textField($model,'r_name',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'r_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'r_renter'); ?>
		<?php echo $form->textField($model,'r_renter',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'r_renter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'r_num_renter'); ?>
		<?php echo $form->textField($model,'r_num_renter'); ?>
		<?php echo $form->error($model,'r_num_renter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->