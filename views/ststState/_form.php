<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stst-state-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'stst_name'); ?>

<?php echo $form->textField($model,'stst_name',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'stst_name'); ?>
<div class='hint'><?php if('hint.StstState.stst_name' != $hint = Yii::t('app', 'stst_name')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stst_code'); ?>
<?php echo $form->textField($model,'stst_code',array('size'=>10,'maxlength'=>10)); ?>
<?php echo $form->error($model,'stst_code'); ?>
<div class='hint'><?php if('hint.StstState.stst_code' != $hint = Yii::t('app', 'stst_code')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stst_icon'); ?>
<?php echo $form->textField($model,'stst_icon',array('size'=>50,'maxlength'=>50)); ?>
<?php echo $form->error($model,'stst_icon'); ?>
<div class='hint'><?php if('hint.StstState.stst_icon' != $hint = Yii::t('app', 'stst_icon')) echo $hint; ?></div>
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('stststate/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
