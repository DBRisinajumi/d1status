<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'stfa_id'); ?>
                            <?php echo $form->textField($model,'stfa_id',array('size'=>10,'maxlength'=>10)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfa_stsf_id'); ?>
                            <?php echo $form->dropDownList($model,'stfa_stsf_id',CHtml::listData(StsfStatesFlow::model()->findAll(), 'stsf_id', 'stsf_stfl_id'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfa_authitem'); ?>
                            <?php echo $form->dropDownList($model,'stfa_authitem',CHtml::listData(Authitem::model()->findAll(), 'name', 'type'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stfa_notes'); ?>
                            <?php echo $form->textArea($model,'stfa_notes',array('rows'=>6, 'cols'=>50)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
