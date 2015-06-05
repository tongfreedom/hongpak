<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->t_id,
);

$this->menu=array(
	array('label'=>'List Transaction', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
	array('label'=>'Update Transaction', 'url'=>array('update', 'id'=>$model->t_id)),
	array('label'=>'Delete Transaction', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->t_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Transaction', 'url'=>array('admin')),
);
?>

<h1>View Transaction #<?php echo $model->t_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		't_id',
		't_date',
		't_e_unit',
		't_total',
		't_status',
		't_notation',
		'room_r_id',
	),
)); ?>
