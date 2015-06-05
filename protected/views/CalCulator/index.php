<?php echo CHtml::form(); ?>
	<?php echo CHtml::textField('a',$a);?><br />
	<?php echo CHtml::textField('b',$b);?><br />

	<?php echo CHtml::submitButton('คำนวณ');?><br />

	<?php echo $c; ?>
<?php echo CHtml::endForm(); ?>