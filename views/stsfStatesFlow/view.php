<?php
$this->breadcrumbs[Yii::t('crud','Stsf States Flows')] = array('admin');
$this->breadcrumbs[] = $model->stsf_id;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud','Stsf States Flow')?> <small><?php echo Yii::t('crud','View')?> #<?php echo $model->stsf_id ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    <?php echo Yii::t('crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
            'stsf_id',
        array(
            'name'=>'stsf_stfl_id',
            'value'=>($model->stsfStfl !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stsfStfl->stfl_name, array('stflFlow/view','stfl_id'=>$model->stsfStfl->stfl_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'stsf_prev_stst_id',
            'value'=>($model->stsfPrevStst !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stsfPrevStst->stst_name, array('ststState/view','stst_id'=>$model->stsfPrevStst->stst_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        array(
            'name'=>'stsf_next_stst_id',
            'value'=>($model->stsfNextStst !== null)?'<span class=label>CBelongsToRelation</span><br/>'.CHtml::link($model->stsfNextStst->stst_name, array('ststState/view','stst_id'=>$model->stsfNextStst->stst_id), array('class'=>'btn')):'n/a',
            'type'=>'html',
        ),
        'stsf_notes',
),
        )); ?></p>


<h2>
    <?php echo Yii::t('crud','Relations')?></h2>

<div class='well'>
    <div class='row'>
<div class='span3'><?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'stfaFlowAccesses', 'icon'=>'icon-list-alt', 'url'=> array('stfaFlowAccess/admin')),
                array('icon'=>'icon-plus', 'url'=>array('stfaFlowAccess/create', 'StfaFlowAccess' => array('stfa_stsf_id'=>$model->{$model->tableSchema->primaryKey}))),
        ),
    )); ?></div><div class='span8'>
<?php
    echo '<span class=label>CHasManyRelation</span>';
    if (is_array($model->stfaFlowAccesses)) {

        echo CHtml::openTag('ul');
            foreach($model->stfaFlowAccesses as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->stfa_notes, array('stfaFlowAccess/view','stfa_id'=>$relatedModel->stfa_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->
