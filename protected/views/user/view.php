<?php
/* @var $this UseController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	$model->id,
);



$this->menu=array(
	array('label'=>'Lista de usuarios', 'url'=>array('index')),
	array('label'=>'Agregar usuario', 'url'=>array('create')),
	array('label'=>'Modificar usuario', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Estas seguro de eliminar este usuario?')),
	array('label'=>'Administrar usuarios', 'url'=>array('admin')),
);


?>

<h1>Esta viendo al usuario: <?php echo $model->username; ?></h1>
<br>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'username',
		'email',
		'fecha_creacion',
	),
)); ?>
