<?php
$this->breadcrumbs[] = Yii::t('D1StatusModule.crud','Stsf States Flows');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('stsf-states-flow-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud', 'Stsf States Flows'); ?> <small><?php echo Yii::t('D1StatusModule.crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'stsf-states-flow-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		'stsf_id',
		array(
					'name'=>'stsf_stfl_id',
					'value'=>'CHtml::value($data,\'stsfStfl.stfl_name\')',
							'filter'=>CHtml::listData(StflFlow::model()->findAll(), 'stfl_id', 'stfl_name'),
							),
		array(
					'name'=>'stsf_prev_stst_id',
					'value'=>'CHtml::value($data,\'stsfPrevStst.stst_name\')',
							'filter'=>CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),
							),
		array(
					'name'=>'stsf_next_stst_id',
					'value'=>'CHtml::value($data,\'stsfNextStst.stst_name\')',
							'filter'=>CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),
							),
#		'stsf_notes',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stsf_id' => \$data->stsf_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stsf_id' => \$data->stsf_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stsf_id' => \$data->stsf_id))",
        ),
    ),
)); ?>
