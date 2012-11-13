<?php
/* @var $this AlumnoController */
/* @var $data Alumno */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apepat')); ?>:</b>
	<?php echo CHtml::encode($data->apepat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apemat')); ?>:</b>
	<?php echo CHtml::encode($data->apemat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_naciemiento')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_naciemiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('descripcion')); ?>:</b>
	<?php echo CHtml::encode($data->descripcion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->iduser0->institucion); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_ingreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_ingreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha_egreso')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_egreso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('adeudo')); ?>:</b>
	<?php echo CHtml::encode($data->adeudo); ?>
	<br />

	*/ ?>

</div>