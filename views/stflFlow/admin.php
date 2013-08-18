<?php
$this->breadcrumbs['Stfl Flows'] = array('admin');
$this->breadcrumbs[] = Yii::t('app', 'Admin');

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('stfl-flow-grid', {
data: $(this).serialize()
});
return false;
});
");
?>
<h1> <?php echo Yii::t('app', 'Manage'); ?> <?php echo Yii::t('app', 'Stfl Flows'); ?> </h1>


<ul><li>HasMany <?php echo CHtml::link('StlgLog', array('stlgLog/admin')); ?> </li><li>HasMany <?php echo CHtml::link('StsfStatesFlow', array('stsfStatesFlow/admin')); ?> </li></ul>

<?php echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?><div class="search-form" style="display:none">
    <?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>
<?php
$locale = CLocale::getInstance(Yii::app()->language);

 $this->widget('zii.widgets.grid.CGridView', array(
'id'=>'stfl-flow-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(


		'stfl_id',
		'stfl_name',
		'stfl_table',
		'stfl_field',
#		'stfl_notes',
array(
'class'=>'CButtonColumn',
'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stfl_id' => \$data->stfl_id))",
'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stfl_id' => \$data->stfl_id))",
'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stfl_id' => \$data->stfl_id))",

),
),
)); ?>


<?php echo CHtml::link('Create new StflFlow', array('create')); ?>