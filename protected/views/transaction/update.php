<?php
/* @var $this TransactionController */
/* @var $model Transaction */

$this->breadcrumbs=array(
	'Transactions'=>array('index'),
	$model->t_id=>array('view','id'=>$model->t_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Transaction', 'url'=>array('index')),
	array('label'=>'Create Transaction', 'url'=>array('create')),
	array('label'=>'View Transaction', 'url'=>array('view', 'id'=>$model->t_id)),
	array('label'=>'Manage Transaction', 'url'=>array('admin')),
);
?>

<h1>Update Transaction <?php echo $model->t_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>