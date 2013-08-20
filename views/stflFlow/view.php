<?php
$this->breadcrumbs[Yii::t('D1StatusModule.crud','Stfl Flows')] = array('admin');
$this->breadcrumbs[] = $model->stfl_name;
?>
<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud','Stfl Flow')?> <small><?php echo Yii::t('D1StatusModule.crud','View')?> <?php echo $model->stfl_name ?></small></h1>



<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>

<h2>
    <?php echo Yii::t('D1StatusModule.crud','Data')?></h2>

<p>
    <?php
    $this->widget('TbDetailView', array(
    'data'=>$model,
    'attributes'=>array(
#        'stfl_id',
        'stfl_name',
        'stfl_table',
        'stfl_field',
        'stfl_notes',
),
        )); ?></p>


<h2>
    <?php echo Yii::t('D1StatusModule.crud','Relations')?></h2>

<div class='well'>
    <div class='row'>
<div class='span3'><?php $this->widget('bootstrap.widgets.TbButtonGroup', array(
        'type'=>'', // '', 'primary', 'info', 'success', 'warning', 'danger' or 'inverse'
        'buttons'=>array(
            array('label'=>'stsfStatesFlows', 'icon'=>'icon-list-alt', 'url'=> array('stsfStatesFlow/admin')),
                array('icon'=>'icon-plus', 'url'=>array('stsfStatesFlow/create', 'StsfStatesFlow' => array('stsf_stfl_id'=>$model->{$model->tableSchema->primaryKey}))),
        ),
    )); ?></div><div class='span8'>
<?php
    echo '<span class=label>CHasManyRelation</span>';
    if (is_array($model->stsfStatesFlows)) {

        echo CHtml::openTag('ul');
            foreach($model->stsfStatesFlows as $relatedModel) {

                echo '<li>';
                echo CHtml::link($relatedModel->stsfPrevStst->stst_name . ' to ' . $relatedModel->stsfNextStst->stst_name , array('stsfStatesFlow/view','stsf_id'=>$relatedModel->stsf_id), array('class'=>''));

                echo '</li>';
            }
        echo CHtml::closeTag('ul');
    }
?></div>
     </div> <!-- row -->
</div> <!-- well -->
