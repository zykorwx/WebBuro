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

	<p class="note">Los campos con  <span class="required">*</span> son requeridos.</p>

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
		<?php //echo $form->textField($model,'fecha_naciemiento'); 
		        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                    'model' => $model,
                    'language' => 'es',
                    'attribute' => 'fecha_naciemiento',
                    'options' => array(
                        'showAnim' => 'fold',
                        'changeYear' => 'true',
                        'changeMonth' => 'true',
                        'maxDate'=>"+1Y",
                        'dateFormat' => 'yy-mm-dd',
                        'showButtonPanel'=>true,
                        'yearRange'=>'1920',
                    ),
            ));
		
		?>
		<?php echo $form->error($model,'fecha_naciemiento'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'descripcion'); ?>
		<?php echo $form->textArea($model,'descripcion',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'descripcion'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Agregar' : 'Guardar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->