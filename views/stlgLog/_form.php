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
    'id'=>'stlg-log-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stlg_record_id'); ?>

            <?php echo $form->textField($model,'stlg_record_id',array('size'=>20,'maxlength'=>20)); ?>
            <?php echo $form->error($model,'stlg_record_id'); ?>
            <?php if('help.stlg_record_id' != $help = Yii::t('D1StatusModule.crud', 'help.stlg_record_id')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stlg_datetime'); ?>
            <?php echo $form->textField($model,'stlg_datetime'); ?>
            <?php echo $form->error($model,'stlg_datetime'); ?>
            <?php if('help.stlg_datetime' != $help = Yii::t('D1StatusModule.crud', 'help.stlg_datetime')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stlgStfl"><?php echo Yii::t('D1StatusModule.crud', 'StlgStfl'); ?></label>
                <?php
                $this->widget(
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
						)
              ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stlgStst"><?php echo Yii::t('D1StatusModule.crud', 'StlgStst'); ?></label>
                <?php
                $this->widget(
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
						)
              ?>
        </div>
    </div>

    <div class="row-fluid input-block-level-container">
        <div class="span12">
        <label for="stlgUser"><?php echo Yii::t('D1StatusModule.crud', 'StlgUser'); ?></label>
                <?php
                $this->widget(
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
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('stlglog/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->