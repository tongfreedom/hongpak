<?php
/* @var $this TransactionController */
/* @var $data Transaction */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->t_id), array('view', 'id'=>$data->t_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_date')); ?>:</b>
	<?php echo CHtml::encode($data->t_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_e_unit')); ?>:</b>
	<?php echo CHtml::encode($data->t_e_unit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_total')); ?>:</b>
	<?php echo CHtml::encode($data->t_total); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_status')); ?>:</b>
	<?php echo CHtml::encode($data->t_status); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('t_notation')); ?>:</b>
	<?php echo CHtml::encode($data->t_notation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('room_r_id')); ?>:</b>
	<?php echo CHtml::encode($data->room_r_id); ?>
	<br />


</div>