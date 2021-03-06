<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Manage',
);


$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Mis alumnos y profesores', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('alumno-grid1', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Buscador de alumnos y profesores</h1>
<br>
	<p class="note">Presiona en busqueda avanzada para introducir los valores de busqueda.</p>
<br>
<?php echo CHtml::link('Da click aqui para buscar','#',array('class'=>'search-button')); ?>
<br>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid1',
	'dataProvider'=>$model->search2(),
	'columns'=>array(
		'curp',
		'fecha_naciemiento',
		'nombre',
		'apepat',
		'apemat',
		'iduser0.institucion',
		'descripcion',
		'deudor',

		/*
		'iduser',
		'fecha_ingreso',
		'fecha_egreso',
		'adeudo',
		*/
		array(
			'class'=>'MyCButtonColumn',
		),
	),
	'emptyText' =>  ($model -> nombre == "Escribe el nombre del alumno o profesor" )? 'No has buscado aun o revise los datos':' El '.$model->deudor.'  con nombre '.$model->nombre.'  no tiene ningun reporte',
)); ?>
