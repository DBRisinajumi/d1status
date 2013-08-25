<?php
$this->breadcrumbs[] = Yii::t('D1StatusModule.crud','Stfa Flow Accesses');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('stfa-flow-access-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud', 'Stfa Flow Accesses'); ?> <small><?php echo Yii::t('D1StatusModule.crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'stfa-flow-access-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		//'stfa_id',
		array(
					'name'=>'stfa_stsf_id',
					'value'=>'CHtml::value($data,\'stfaStsf.stsf_stfl_id\')',
							'filter'=>CHtml::listData(StsfStatesFlow::model()->findAll(), 'stsf_id', 'stsf_stfl_id'),
							),
		array(
					'name'=>'stfa_authitem',
					'value'=>'CHtml::value($data,\'stfaAuthitem.type\')',
							'filter'=>CHtml::listData(Authitem::model()->findAll(), 'name', 'type'),
							),
#		'stfa_notes',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stfa_id' => \$data->stfa_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stfa_id' => \$data->stfa_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stfa_id' => \$data->stfa_id))",
        ),
    ),
)); ?>
