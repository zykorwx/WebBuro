<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de alumnos', 'url'=>array('index'),'visible'=>Yii::app()->user->getName()=='admin'),
	array('label'=>'Agregar alumno', 'url'=>array('create')),
	array('label'=>'Ver alumno', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar alumnos', 'url'=>array('admin')),
);
?>

<h1>Modificar datos del alumno <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>