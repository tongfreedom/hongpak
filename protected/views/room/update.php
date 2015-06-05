<?php
/* @var $this RoomController */
/* @var $model Room */

$this->breadcrumbs=array(
	'Rooms'=>array('index'),
	$model->r_id=>array('view','id'=>$model->r_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Room', 'url'=>array('index')),
	array('label'=>'Create Room', 'url'=>array('create')),
	array('label'=>'View Room', 'url'=>array('view', 'id'=>$model->r_id)),
	array('label'=>'Manage Room', 'url'=>array('admin')),
);
?>

<h1>Update Room <?php echo $model->r_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>