<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('User ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->iduser),array('view','id'=>$data->iduser)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('User Name')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Organisation')); ?>:</b>
	<?php echo CHtml::encode($data->idorg); ?>
	<br />


</div>