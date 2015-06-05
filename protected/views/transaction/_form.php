<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'transaction-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'t_date'); ?>
		<?php echo $form->textField($model,'t_date'); ?>
		<?php echo $form->error($model,'t_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_e_unit'); ?>
		<?php echo $form->textField($model,'t_e_unit'); ?>
		<?php echo $form->error($model,'t_e_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_total'); ?>
		<?php echo $form->textField($model,'t_total'); ?>
		<?php echo $form->error($model,'t_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_status'); ?>
		<?php echo $form->textField($model,'t_status'); ?>
		<?php echo $form->error($model,'t_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'t_notation'); ?>
		<?php echo $form->textField($model,'t_notation',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'t_notation'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'room_r_id'); ?>
		<?php echo $form->textField($model,'room_r_id'); ?>
		<?php echo $form->error($model,'room_r_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->