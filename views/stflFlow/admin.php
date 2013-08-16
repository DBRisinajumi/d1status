<?php
$this->breadcrumbs[] = Yii::t('crud','Stfl Flows');


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

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('crud', 'Stfl Flows'); ?> <small><?php echo Yii::t('crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'stfl-flow-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		'stfl_id',
		'stfl_name',
		'stfl_table',
		'stfl_field',
#		'stfl_notes',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stfl_id' => \$data->stfl_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stfl_id' => \$data->stfl_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stfl_id' => \$data->stfl_id))",
        ),
    ),
)); ?>
