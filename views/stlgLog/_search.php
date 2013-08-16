<div class="wide form">

    <?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

                    <div class="row">
            <?php echo $form->label($model,'stlg_id'); ?>
                            <?php echo $form->textField($model,'stlg_id',array('size'=>10,'maxlength'=>10)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stlg_stfl_id'); ?>
                            <?php echo $form->dropDownList($model,'stlg_stfl_id',CHtml::listData(StflFlow::model()->findAll(), 'stfl_id', 'stfl_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stlg_record_id'); ?>
                            <?php echo $form->textField($model,'stlg_record_id',array('size'=>20,'maxlength'=>20)); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stlg_user_id'); ?>
                            <?php echo $form->dropDownList($model,'stlg_user_id',CHtml::listData(SUsers::model()->findAll(), 'id', 'username'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stlg_stst_id'); ?>
                            <?php echo $form->dropDownList($model,'stlg_stst_id',CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),array('prompt'=>'all')); ?>
                    </div>

                    <div class="row">
            <?php echo $form->label($model,'stlg_datetime'); ?>
                            <?php echo $form->textField($model,'stlg_datetime'); ?>
                    </div>

        <div class="row buttons">
        <?php echo CHtml::submitButton(Yii::t('crud', 'Search')); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->
