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
		<?php echo $form->labelEx($model,'curp'); ?>
		<?php echo $form->textField($model,'curp',array('size'=>18,'maxlength'=>18)); ?>
		<?php echo $form->error($model,'curp'); ?>
	</div>

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
                        'dateFormat' => 'dd-mm-yy',
                        'showButtonPanel'=>true,
                        'yearRange'=>'1920',
                    ),
            ));
		
		?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'deudor'); ?>
		<?php echo $form->dropDownList($model,'deudor', array('Alumno'=>'Alumno', 'Profesor'=>'Profesor'), array('prompt'=>'Elije uno')); ?>
		<?php echo $form->error($model,'deudor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->