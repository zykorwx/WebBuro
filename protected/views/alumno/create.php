<?php
/* @var $this AlumnoController */
/* @var $model Alumno */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Lista de alumnos', 'url'=>array('index'),'visible'=>Yii::app()->user->getName()=='admin'),
	array('label'=>'Administrar alumnos', 'url'=>array('admin')),
);


?>

<h1>Agregar alumno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>