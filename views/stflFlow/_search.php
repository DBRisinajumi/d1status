<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'stfl_id'); ?>
                            <?php echo $form->textField($model,'stfl_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfl_name'); ?>
                            <?php echo $form->textField($model,'stfl_name',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfl_table'); ?>
                            <?php echo $form->textField($model,'stfl_table',array('size'=>60,'maxlength'=>255)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfl_field'); ?>
                            <?php echo $form->textField($model,'stfl_field',array('size'=>60,'maxlength'=>255)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfl_notes'); ?>
                            <?php echo $form->textArea($model,'stfl_notes',array('rows'=>6, 'cols'=>50)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
