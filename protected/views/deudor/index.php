<?php
/* @var $this DeudorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Alumnos',
);

$this->menu=array(
	array('label'=>'Agregar alumno', 'url'=>array('create')),
	array('label'=>'Administrar alumnos', 'url'=>array('admin')),
);
?>

<h1>Alumnos</h1>
<br>

	<br>
<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
