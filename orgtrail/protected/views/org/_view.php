<?php
/* @var $this OrgController */
/* @var $data Org */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('idorg')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idorg),array('view','id'=>$data->idorg)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('orgname')); ?>:</b>
	<?php echo CHtml::encode($data->orgname); ?>
	<br />


</div>