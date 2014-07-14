<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ID), array('view', 'id'=>$data->ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Username')); ?>:</b>
	<?php echo CHtml::encode($data->Username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Password')); ?>:</b>
	<?php echo CHtml::encode($data->Password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Email')); ?>:</b>
	<?php echo CHtml::encode($data->Email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('JoinDate')); ?>:</b>
	<?php echo CHtml::encode($data->JoinDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Avatar')); ?>:</b>
	<?php echo CHtml::encode($data->Avatar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Level_id')); ?>:</b>
	<?php echo CHtml::encode($data->Level_id); ?>
	<br />


</div>