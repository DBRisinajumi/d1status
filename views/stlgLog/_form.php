<div class="form">
    <p class="note">
        <?php echo Yii::t('app','Fields with');?> <span class="required">*</span> <?php echo Yii::t('app','are required');?>.
    </p>

    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stlg-log-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);
    ?>

    <div class="row">
<?php echo $form->labelEx($model,'stlg_record_id'); ?>

<?php echo $form->textField($model,'stlg_record_id',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'stlg_record_id'); ?>
<div class='hint'><?php if('hint.StlgLog.stlg_record_id' != $hint = Yii::t('app', 'stlg_record_id')) echo $hint; ?></div>
</div>

<div class="row">
<?php echo $form->labelEx($model,'stlg_datetime'); ?>
<?php echo $form->textField($model,'stlg_datetime'); ?>
<?php echo $form->error($model,'stlg_datetime'); ?>
<div class='hint'><?php if('hint.StlgLog.stlg_datetime' != $hint = Yii::t('app', 'stlg_datetime')) echo $hint; ?></div>
</div>

<div class="row">
<label for="stlgStfl"><?php echo Yii::t('app', 'StlgStfl'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stlgStfl',
							'fields' => 'stfl_name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>

<div class="row">
<label for="stlgStst"><?php echo Yii::t('app', 'StlgStst'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stlgStst',
							'fields' => 'stst_name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>

<div class="row">
<label for="stlgUser"><?php echo Yii::t('app', 'StlgUser'); ?></label>
<?php $this->widget(
					'Relation',
					array(
							'model' => $model,
							'relation' => 'stlgUser',
							'fields' => 'username',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						); ?><br />
</div>


    <?php
echo CHtml::Button(Yii::t('app', 'Cancel'), array(
			'submit' => array('stlglog/admin')));
echo CHtml::submitButton(Yii::t('app', 'Save'));
$this->endWidget(); ?>
</div> <!-- form -->
