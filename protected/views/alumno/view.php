<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de alumnos', 'url'=>array('index'),'visible'=>Yii::app()->user->getName()=='admin'),
	array('label'=>'Agregar alumno', 'url'=>array('create')),
	array('label'=>'Modificar alumno', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar Alumno', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->getName()=='admin'),
	array('label'=>'Administrar alumnos', 'url'=>array('admin')),
);
?>

<h1>Viendo datos del alumno #<?php echo $model->nombre; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'nombre',
		'apepat',
		'apemat',
		'fecha_naciemiento',
		'descripcion',
		'iduser',
	),
)); ?>
