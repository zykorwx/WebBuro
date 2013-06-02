<?php
/* @var $this DeudorController */
/* @var $model Deudor */

$this->breadcrumbs=array(
	'Alumnos'=>array('index'),
	$model->id,
);

$users=User::model()->find('LOWER(username)=?',array(Yii::app()->user->getid()));
if (($users->id === $model->id)or($users->username === 'admin' )){
$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Agregar alumno o profesor', 'url'=>array('create')),
	array('label'=>'Modificar alumno o profesor', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Borrar alumnoo profesor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->getName()=='admin'),
	array('label'=>'Mis alumnos y profesores', 'url'=>array('admin')),
	array('label'=>'Buscar alumnos o profesores', 'url'=>array('admin2')),
);}
else {
	$this->menu=array(
	array('label'=>'Inicio', 'url'=>array('site/alumnosIndex')),
	array('label'=>'Buscar alumnos o profesores', 'url'=>array('admin2')),
);
}
?>

<h1>Alumno: <?php echo $model->nombre.' '.$model->apepat.' '.$model->apemat; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'curp',
		'fecha_naciemiento',
		'nombre',
		'apepat',
		'apemat',
		'descripcion',
		'iduser0.institucion',
		'deudor',
	),
)); ?>
