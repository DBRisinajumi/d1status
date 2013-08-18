<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stfa-flow-access-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'stfa_notes'); ?>

<?php echo $form->textArea($model,'stfa_notes',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'stfa_notes'); ?>
<div class='hint'><?php if('hint.StfaFlowAccess.stfa_notes' != $hint = Yii::t('app', 'stfa_notes')) echo $hint; ?></div>
</div>

<div class="row">
<label for="stfaStsf"><?php echo Yii::t('app', 'StfaStsf'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stfaStsf',
							'fields' => 'stsf_notes',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>

<div class="row">
<label for="stfaAuthitem"><?php echo Yii::t('app', 'StfaAuthitem'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stfaAuthitem',
							'fields' => 'type',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('stfaflowaccess/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
