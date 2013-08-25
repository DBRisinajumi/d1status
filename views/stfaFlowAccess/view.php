<?php
$this->breadcrumbs[Yii::t('D1StatusModule.crud','Stfa Flow Accesses')] = array('admin');
$this->breadcrumbs[] = $model->stfa_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud','Stfa Flow Access')?> <small><?php echo Yii::t('D1StatusModule.crud','View')?> #<?php echo $model->stfa_authitem ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    <?php echo Yii::t('D1StatusModule.crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'stfa_id',
        array(
            'name'=>'stfa_stsf_id',
            'value'=>($model->stfaStsf !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stfaStsf->stsf_notes, array('stsfStatesFlow/view','stsf_id'=>$model->stfaStsf->stsf_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'stfa_authitem',
            'value'=>($model->stfaAuthitem !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stfaAuthitem->type, array('authitem/view','name'=>$model->stfaAuthitem->name), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'stfa_notes',
),
        )); ?></p>


<h2>
    <?php echo Yii::t('D1StatusModule.crud','Relations')?></h2>

