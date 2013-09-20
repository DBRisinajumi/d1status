<div class="">
    <p class="alert">
        <?php echo Yii::t('D1StatusModule.crud','Fields with <span class="required">*</span> are required.');?> 
    </p>


    <?php
    $this->widget('echosen.EChosen',
        array('target'=>'select')
    );
    ?>
    <?php
    $form=$this->beginWidget('CActiveForm', array(
    'id'=>'stfa-flow-access-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stfaStsf"><?php echo Yii::t('D1StatusModule.crud', 'StfaStsf'); ?></label>
                <?php
                $this->widget(
					'vendor.schmunk42.relation.widgets.GtcRelation',
					array(
							'model' => $model,
							'relation' => 'stfaStsf',
							'fields' => array('stsfPrevStst.stst_name','stsfNextStst.stst_name','stsf_notes'),
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						)
              ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stfaAuthitem"><?php echo Yii::t('D1StatusModule.crud', 'StfaAuthitem'); ?></label>
                <?php
                $this->widget(
					'vendor.schmunk42.relation.widgets.GtcRelation',
					array(
							'model' => $model,
							'relation' => 'stfaAuthitem',
							'fields' => 'name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							'htmlOptions' => array(
								'checkAll' => 'all'),
							)
						)
              ?>
        </div>
    </div>
         
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stfa_notes'); ?>

            <?php echo $form->textArea($model,'stfa_notes',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'stfa_notes'); ?>
            <?php if('help.stfa_notes' != $help = Yii::t('D1StatusModule.crud', 'help.stfa_notes')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>
         
    </div> <!-- main inputs -->


    <div class="span4"> <!-- sub inputs -->

    </div> <!-- sub inputs -->
</div>


    <div class="form-actions">
        
    <?php
        echo CHtml::Button(Yii::t('D1StatusModule.crud', 'Cancel'), array(
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('stfaflowaccess/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->