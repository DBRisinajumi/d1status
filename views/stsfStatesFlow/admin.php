<?php
$this->breadcrumbs['Stsf States Flows'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

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
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Stsf States Flows'); ?> </h1>


<ul><li>HasMany <?php echo CHtml::link('StfaFlowAccess', array('stfaFlowAccess/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('StflFlow', array('stflFlow/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('StstState', array('ststState/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('StstState', array('ststState/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'stsf-states-flow-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
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
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stsf_id' => \$data->stsf_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stsf_id' => \$data->stsf_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stsf_id' => \$data->stsf_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new StsfStatesFlow', array('create')); ?>