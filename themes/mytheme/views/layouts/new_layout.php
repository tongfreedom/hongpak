<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo CHtml::encode($this->pageTitle); ?></title>
        <link rel="stylesheet" href="css/style.css">
        <link rel="author" href="humans.txt">
    </head>
    <body>
	    <div id="header">
			<div id="logo">
				<?php echo CHtml::encode(Yii::app()->name); ?>
			</div>
		</div><!-- header -->
		<div id="mainmenu">
			<?php $this->widget('zii.widgets.CMenu',array(
				'items'=>array(
					array('label'=>'Home', 'url'=>array('/site/index')),
					array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
					array('label'=>'Contact', 'url'=>array('/site/contact')),
					array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
					array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
				),
			)); ?>
		</div><!-- mainmenu -->

		<div>
			<?php if(isset($this->breadcrumbs)):?>
				<?php $this->widget('zii.widgets.CBreadcrumbs', array(
					'links'=>$this->breadcrumbs,
				)); ?><!-- breadcrumbs -->
			<?php endif?>	
		</div>
	
		<div style="color:red;">
			<?php echo $content; ?>
		</div>

		<div>
			<div id="footer">
			Copyright &copy; <?php echo date('Y'); ?> by My Company.<br/>
			All Rights Reserved.<br/>
			<?php echo Yii::powered(); ?>
			</div><!-- footer -->
		</div>
       
    </body>
</html>