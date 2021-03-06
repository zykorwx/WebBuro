<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Agregar alumno o profesor', 'url'=>array('create')),
	array('label'=>'Ver alumno o profesor', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Mis alumnos y profesores', 'url'=>array('admin')),
	array('label'=>'Buscar alumnos o profesores', 'url'=>array('admin2')),
);
?>

<h1>Modificar datos del alumno <?php echo $model->nombre; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>