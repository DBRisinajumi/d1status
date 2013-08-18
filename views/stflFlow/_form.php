<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stfl-flow-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'stfl_name'); ?>

<?php echo $form->textField($model,'stfl_name',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'stfl_name'); ?>
<div class='hint'><?php if('hint.StflFlow.stfl_name' != $hint = Yii::t('app', 'stfl_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stfl_table'); ?>
<?php echo $form->textField($model,'stfl_table',array('size'=>60,'maxlength'=>255)); ?>
<?php echo $form->error($model,'stfl_table'); ?>
<div class='hint'><?php if('hint.StflFlow.stfl_table' != $hint = Yii::t('app', 'stfl_table')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stfl_field'); ?>
<?php echo $form->textField($model,'stfl_field',array('size'=>60,'maxlength'=>255)); ?>
<?php echo $form->error($model,'stfl_field'); ?>
<div class='hint'><?php if('hint.StflFlow.stfl_field' != $hint = Yii::t('app', 'stfl_field')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stfl_notes'); ?>
<?php echo $form->textArea($model,'stfl_notes',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'stfl_notes'); ?>
<div class='hint'><?php if('hint.StflFlow.stfl_notes' != $hint = Yii::t('app', 'stfl_notes')) echo $hint; ?></div>
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('stflflow/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
