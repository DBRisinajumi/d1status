<?php
$this->breadcrumbs[] = Yii::t('crud','Stlg Logs');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('stlg-log-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Stlg Logs'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'stlg-log-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		'stlg_id',
		array(
					'name'=>'stlg_stfl_id',
					'value'=>'CHtml::value($data,\'stlgStfl.stfl_name\')',
							'filter'=>CHtml::listData(StflFlow::model()->findAll(), 'stfl_id', 'stfl_name'),
							),
		'stlg_record_id',
		array(
					'name'=>'stlg_user_id',
					'value'=>'CHtml::value($data,\'stlgUser.username\')',
							'filter'=>CHtml::listData(SUsers::model()->findAll(), 'id', 'username'),
							),
		array(
					'name'=>'stlg_stst_id',
					'value'=>'CHtml::value($data,\'stlgStst.stst_name\')',
							'filter'=>CHtml::listData(StstState::model()->findAll(), 'stst_id', 'stst_name'),
							),
		'stlg_datetime',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stlg_id' => \$data->stlg_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stlg_id' => \$data->stlg_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stlg_id' => \$data->stlg_id))",
        ),
    ),
)); ?>
