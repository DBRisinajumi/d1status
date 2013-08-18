<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stsf-states-flow-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'stsf_notes'); ?>

<?php echo $form->textArea($model,'stsf_notes',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'stsf_notes'); ?>
<div class='hint'><?php if('hint.StsfStatesFlow.stsf_notes' != $hint = Yii::t('app', 'stsf_notes')) echo $hint; ?></div>
</div>

<div class="row">
<label for="stsfStfl"><?php echo Yii::t('app', 'StsfStfl'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stsfStfl',
							'fields' => 'stfl_name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>

<div class="row">
<label for="stsfPrevStst"><?php echo Yii::t('app', 'StsfPrevStst'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stsfPrevStst',
							'fields' => 'stst_name',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>

<div class="row">
<label for="stsfNextStst"><?php echo Yii::t('app', 'StsfNextStst'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stsfNextStst',
							'fields' => 'stst_name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('stsfstatesflow/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
