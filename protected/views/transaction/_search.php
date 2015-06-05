<?php
/* @var $this TransactionController */
/* @var $model Transaction */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'t_id'); ?>
		<?php echo $form->textField($model,'t_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_date'); ?>
		<?php echo $form->textField($model,'t_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_e_unit'); ?>
		<?php echo $form->textField($model,'t_e_unit'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_total'); ?>
		<?php echo $form->textField($model,'t_total'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_status'); ?>
		<?php echo $form->textField($model,'t_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'t_notation'); ?>
		<?php echo $form->textField($model,'t_notation',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'room_r_id'); ?>
		<?php echo $form->textField($model,'room_r_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->