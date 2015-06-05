<?php
/* @var $this RoomController */
/* @var $data Room */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->r_id), array('view', 'id'=>$data->r_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_name')); ?>:</b>
	<?php echo CHtml::encode($data->r_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_renter')); ?>:</b>
	<?php echo CHtml::encode($data->r_renter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('r_num_renter')); ?>:</b>
	<?php echo CHtml::encode($data->r_num_renter); ?>
	<br />


</div>