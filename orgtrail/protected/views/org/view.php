<?php
/* @var $this OrgController */
/* @var $model Org */
?>

<?php
$this->breadcrumbs=array(
	'Orgs'=>array('index'),
	$model->idorg,
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Create Org', 'url'=>array('create')),
	array('label'=>'Update Org', 'url'=>array('update', 'id'=>$model->idorg)),
	array('label'=>'Delete Org', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idorg),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>

<h1>View Org #<?php echo $model->idorg; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'idorg',
		'orgname',
	),
)); ?>