<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->r_id,
);

$this->menu=array(
	array('label'=>'List Room', 'url'=>array('index')),
	array('label'=>'Create Room', 'url'=>array('create')),
	array('label'=>'Update Room', 'url'=>array('update', 'id'=>$model->r_id)),
	array('label'=>'Delete Room', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->r_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Room', 'url'=>array('admin')),
);
?>

<h1>ข้อมูลห้องพัก <?php echo $model->r_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'r_id',
		'r_name',
		'r_renter',
		'r_num_renter',
	),
)); ?>
