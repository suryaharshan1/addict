<?php
/* @var $this OrgController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Orgs',
);

$this->menu=array(
	array('label'=>'Create Org','url'=>array('create')),
	array('label'=>'Manage Org','url'=>array('admin')),
);
?>

<h1>Orgs</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>