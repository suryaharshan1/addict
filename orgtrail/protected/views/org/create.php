<?php
/* @var $this OrgController */
/* @var $model Org */
?>

<?php
$this->breadcrumbs=array(
	'Orgs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>

<h1>Create Org</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>