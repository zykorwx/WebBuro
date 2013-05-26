<?php
/* @var $this DeudorController */
/* @var $model Deudor */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>


	<div class="row">
		<?php echo $form->label($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apepat'); ?>
		<?php echo $form->textField($model,'apepat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'apemat'); ?>
		<?php echo $form->textField($model,'apemat',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_naciemiento'); ?>
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
	</div>


	<div class="row">
		<?php echo $form->label($model,'iduser'); ?>
		<?php echo $form->textField($model,'iduser'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tipo_deudor'); ?>
		<?php echo $form->DropDownList($model,'Deudor',['Profesor', 'Alumno'],  array('empty'=>;'--Seleccione una opcion--')); ?>
		<?php echo $form->error($model,'tipo_deudor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->