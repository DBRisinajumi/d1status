<?php
$this->breadcrumbs['Stfa Flow Accesses'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

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
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Stfa Flow Accesses'); ?> </h1>


<ul><li>BelongsTo <?php echo CHtml::link('StsfStatesFlow', array('stsfStatesFlow/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('Authitem', array('authitem/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'stfa-flow-access-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


		'stfa_id',
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
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stfa_id' => \$data->stfa_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stfa_id' => \$data->stfa_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stfa_id' => \$data->stfa_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new StfaFlowAccess', array('create')); ?>