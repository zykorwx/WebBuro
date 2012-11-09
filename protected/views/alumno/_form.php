<?php
/* @var $this AlumnoController */
/* @var $model Alumno */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'alumno-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apepat'); ?>
		<?php echo $form->textField($model,'apepat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apepat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apemat'); ?>
		<?php echo $form->textField($model,'apemat',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'apemat'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_naciemiento'); ?>
		<?php echo $form->textField($model,'fecha_naciemiento'); ?>
		<?php echo $form->error($model,'fecha_naciemiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
		<?php echo $form->error($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_ingreso'); ?>
		<?php echo $form->textField($model,'fecha_ingreso'); ?>
		<?php echo $form->error($model,'fecha_ingreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha_egreso'); ?>
		<?php echo $form->textField($model,'fecha_egreso'); ?>
		<?php echo $form->error($model,'fecha_egreso'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'adeudo'); ?>
		<?php echo $form->textField($model,'adeudo'); ?>
		<?php echo $form->error($model,'adeudo'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->