<?php
/* @var $this UseController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'user-form',
	'enableAjaxValidation'=>false,
)); ?>
<br>
	<p class="note">Los campos con  <span class="required">*</span> son requeridos.</p>
<br>
	<?php echo $form->errorSummary($model); ?>



	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Confirmar password'); ?>
		<?php echo $form->passwordField($model,'password2',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'password2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>
	
		<div class="row">

		<?php echo $form->labelEx($model,'Pregunta secreta'); ?>
		<?php echo $form->dropDownList($model, 'pregunta',  array('Cual fue el nombre de tu primer mascota?' => 'Cual fue nombre de tu primer mascota?','Cual fue tu primer auto?' => 'Cual fue tu primer auto?', 'Donde nacio tu madre?' => 'Donde nacio tu madre?'), array('empty' => 'Selecciona una de las siguentes preguntas')); ?>
		<?php echo $form->error($model,'pregunta'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'Respuesta'); ?>
		<?php echo $form->textField($model,'respuesta',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'email'); ?>
		<br>
					<p class="hint" style="margin-left:10px;">
			Nota: Tu pregunta secreta y la respuesta se usa para poder recuperar tu password en caso que lo olvides.
			</p>
		
		
	</div>

<br>
<br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Registrarse' : 'Registrarse'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->