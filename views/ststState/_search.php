<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'stst_id'); ?>
                            <?php echo $form->textField($model,'stst_id'); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stst_name'); ?>
                            <?php echo $form->textField($model,'stst_name',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stst_code'); ?>
                            <?php echo $form->textField($model,'stst_code',array('size'=>10,'maxlength'=>10)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stst_icon'); ?>
                            <?php echo $form->textField($model,'stst_icon',array('size'=>50,'maxlength'=>50)); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
