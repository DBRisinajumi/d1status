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
    'id'=>'stst-state-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stst_name'); ?>

            <?php echo $form->textField($model,'stst_name',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'stst_name'); ?>
            <?php if('help.stst_name' != $help = Yii::t('D1StatusModule.crud', 'help.stst_name')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stst_code'); ?>
            <?php echo $form->textField($model,'stst_code',array('size'=>10,'maxlength'=>10)); ?>
            <?php echo $form->error($model,'stst_code'); ?>
            <?php if('help.stst_code' != $help = Yii::t('D1StatusModule.crud', 'help.stst_code')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stst_icon'); ?>
            <?php echo $form->textField($model,'stst_icon',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'stst_icon'); ?>
            <?php if('help.stst_icon' != $help = Yii::t('D1StatusModule.crud', 'help.stst_icon')) { 
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
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('stststate/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->