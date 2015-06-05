<?php
/* @var $this RoomController */
/* @var $model Room */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'r_id'); ?>
		<?php echo $form->textField($model,'r_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_name'); ?>
		<?php echo $form->textField($model,'r_name',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_renter'); ?>
		<?php echo $form->textField($model,'r_renter',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'r_num_renter'); ?>
		<?php echo $form->textField($model,'r_num_renter'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->