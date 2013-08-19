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
    'id'=>'stsf-states-flow-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stsf_notes'); ?>

            <?php echo $form->textArea($model,'stsf_notes',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'stsf_notes'); ?>
            <?php if('help.stsf_notes' != $help = Yii::t('D1StatusModule.crud', 'help.stsf_notes')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stsfStfl"><?php echo Yii::t('D1StatusModule.crud', 'StsfStfl'); ?></label>
                <?php
                $this->widget(
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
						)
              ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stsfPrevStst"><?php echo Yii::t('D1StatusModule.crud', 'StsfPrevStst'); ?></label>
                <?php
                $this->widget(
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
						)
              ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stsfNextStst"><?php echo Yii::t('D1StatusModule.crud', 'StsfNextStst'); ?></label>
                <?php
                $this->widget(
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
						)
              ?>
        </div>
    </div>

    </div> <!-- main inputs -->


    <div class="span4"> <!-- sub inputs -->

    </div> <!-- sub inputs -->
</div>


    <div class="form-actions">
        
    <?php
        echo CHtml::Button(Yii::t('D1StatusModule.crud', 'Cancel'), array(
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('stsfstatesflow/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->