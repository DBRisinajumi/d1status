<?php
$this->breadcrumbs[Yii::t('D1StatusModule.crud','Stlg Logs')] = array('admin');
$this->breadcrumbs[] = $model->stlg_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud','Stlg Log')?> <small><?php echo Yii::t('D1StatusModule.crud','View')?> #<?php echo $model->stlg_id ?> <?php echo $model->stlg_datetime ?> </small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    <?php echo Yii::t('D1StatusModule.crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'stlg_id',
        array(
            'name'=>'stlg_stfl_id',
            'value'=>($model->stlgStfl !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stlgStfl->stfl_name, array('stflFlow/view','stfl_id'=>$model->stlgStfl->stfl_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'stlg_record_id',
        array(
            'name'=>'stlg_user_id',
            'value'=>($model->stlgUser !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stlgUser->username, array('sUsers/view','id'=>$model->stlgUser->id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'stlg_stst_id',
            'value'=>($model->stlgStst !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stlgStst->stst_name, array('ststState/view','stst_id'=>$model->stlgStst->stst_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'stlg_datetime',
),
        )); ?></p>


<h2>
    <?php echo Yii::t('D1StatusModule.crud','Relations')?></h2>

