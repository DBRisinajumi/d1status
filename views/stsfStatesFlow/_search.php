<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'stsf_id'); ?>
                            <?php echo $form->textField($model,'stsf_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stsf_stfl_id'); ?>
                            <?php echo $form->dropDownList($model,'stsf_stfl_id',CHtml::listData(StflFlow::model()->findAll(), 'stfl_id', 'stfl_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stsf_prev_stst_id'); ?>
                            <?php echo $form->dropDownList($model,'stsf_prev_stst_id',CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stsf_next_stst_id'); ?>
                            <?php echo $form->dropDownList($model,'stsf_next_stst_id',CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stsf_notes'); ?>
                            <?php echo $form->textArea($model,'stsf_notes',array('rows'=>6, 'cols'=>50)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('D1StatusModule.crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
