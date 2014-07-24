<?php
/* @var $this OrgController */
/* @var $model Org */
?>

<?php
$this->breadcrumbs=array(
	'Orgs'=>array('index'),
	$model->idorg=>array('view','id'=>$model->idorg),
	'Update',
);

$this->menu=array(
	array('label'=>'List Org', 'url'=>array('index')),
	array('label'=>'Create Org', 'url'=>array('create')),
	array('label'=>'View Org', 'url'=>array('view', 'id'=>$model->idorg)),
	array('label'=>'Manage Org', 'url'=>array('admin')),
);
?>

    <h1>Update Org <?php echo $model->idorg; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>