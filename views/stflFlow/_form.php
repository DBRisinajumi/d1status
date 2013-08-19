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
    'id'=>'stfl-flow-form',
    'enableAjaxValidation'=>true,
    'enableClientValidation'=>true,
    ));

    echo $form->errorSummary($model);

    ?>
 <div class="row">
     <div class="span8"> <!-- main inputs -->

    
    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stfl_name'); ?>

            <?php echo $form->textField($model,'stfl_name',array('size'=>50,'maxlength'=>50)); ?>
            <?php echo $form->error($model,'stfl_name'); ?>
            <?php if('help.stfl_name' != $help = Yii::t('D1StatusModule.crud', 'help.stfl_name')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stfl_table'); ?>
            <?php echo $form->textField($model,'stfl_table',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'stfl_table'); ?>
            <?php if('help.stfl_table' != $help = Yii::t('D1StatusModule.crud', 'help.stfl_table')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stfl_field'); ?>
            <?php echo $form->textField($model,'stfl_field',array('size'=>60,'maxlength'=>255)); ?>
            <?php echo $form->error($model,'stfl_field'); ?>
            <?php if('help.stfl_field' != $help = Yii::t('D1StatusModule.crud', 'help.stfl_field')) { 
                echo "<span class='help-block'>{$help}</span>";            
} ?>
        </div>
    </div>


    <div class="row-fluid input-block-level-container">
        <div class="span12">
            <?php echo $form->labelEx($model,'stfl_notes'); ?>
            <?php echo $form->textArea($model,'stfl_notes',array('rows'=>6, 'cols'=>50)); ?>
            <?php echo $form->error($model,'stfl_notes'); ?>
            <?php if('help.stfl_notes' != $help = Yii::t('D1StatusModule.crud', 'help.stfl_notes')) { 
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
			'submit' => (isset($_GET['returnUrl']))?$_GET['returnUrl']:array('stflflow/admin'),
			'class' => 'btn'
			));
        echo ' '.CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Save'), array(
            'class' => 'btn btn-primary'
            ));
    ?>
</div>

<?php $this->endWidget() ?>
</div> <!-- form -->