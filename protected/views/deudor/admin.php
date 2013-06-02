<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
    array('label'=>'Buscar alumno o profesor', 'url'=>array('admin2')),
	array('label'=>'Agregar alumno o profesor', 'url'=>array('create')),

);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('alumno-grid', {
		data: $(this).serialize()
	});
	return false;
});
");



?>

<h1>Mis alumnos y profesores</h1>
<br>
	<p class="note">A continuacion solo se muestran tus alumnos y profesores.</p>
<br>
<?php echo CHtml::link('Busqueda avanzada','#',array('class'=>'search-button')); ?>
<br>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'alumno-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'curp',
		'fecha_naciemiento',
		'nombre',
		'apepat',
		'apemat',
		'descripcion',
		'iduser0.institucion',
		'deudor',
		/*
		'iduser',
		'fecha_ingreso',
		'fecha_egreso',
		'adeudo',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
