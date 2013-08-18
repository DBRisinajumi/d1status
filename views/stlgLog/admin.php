<?php
$this->breadcrumbs['Stlg Logs'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

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
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Stlg Logs'); ?> </h1>


<ul><li>BelongsTo <?php echo CHtml::link('StflFlow', array('stflFlow/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('StstState', array('ststState/admin')); ?> </li><li>BelongsTo <?php echo CHtml::link('SUsers', array('sUsers/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'stlg-log-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
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
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stlg_id' => \$data->stlg_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stlg_id' => \$data->stlg_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stlg_id' => \$data->stlg_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new StlgLog', array('create')); ?>