<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Mis alumnos y profesores', 'url'=>array('admin')),
	array('label'=>'Buscar alumnos o profesores', 'url'=>array('admin2')),
);


?>

<h1>Agregar alumno o profesor</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>