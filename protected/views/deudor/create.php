<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Mis alumnos', 'url'=>array('admin')),
	array('label'=>'Buscar alumnos', 'url'=>array('admin2')),
);


?>

<h1>Agregar alumno</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>