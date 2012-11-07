<?php
/* @var $this UseController */
/* @var $model User */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Registro',
);
if (Yii::app()->user->name==='admin'){
$this->menu=array(
	array('label'=>'Lista de usuarios', 'url'=>array('index')),
	array('label'=>'Administrador de usuarios', 'url'=>array('admin')),
);
}
?>

<h1>Registrar usuario</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>