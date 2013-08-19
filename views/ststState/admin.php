<?php
$this->breadcrumbs[] = Yii::t('D1StatusModule.crud','Stst States');


Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('stst-state-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<?php $this->widget("TbBreadcrumbs", array("links"=>$this->breadcrumbs)) ?>
<h1>
    <?php echo Yii::t('D1StatusModule.crud', 'Stst States'); ?> <small><?php echo Yii::t('D1StatusModule.crud', 'Manage'); ?></small>
</h1>

<?php $this->renderPartial("_toolbar", array("model"=>$model)); ?>
<?php $this->widget('TbGridView',
    array(
        'id'=>'stst-state-grid',
        'dataProvider'=>$model->search(),
        'filter'=>$model,
        'pager' => array(
        'class' => 'TbPager',
        'displayFirstAndLast' => true,
    ),
    'columns'=>array(
		'stst_id',
		'stst_name',
		'stst_code',
		'stst_icon',
        array(
            'class'=>'TbButtonColumn',
            'viewButtonUrl' => "Yii::app()->controller->createUrl('view', array('stst_id' => \$data->stst_id))",
            'updateButtonUrl' => "Yii::app()->controller->createUrl('update', array('stst_id' => \$data->stst_id))",
            'deleteButtonUrl' => "Yii::app()->controller->createUrl('delete', array('stst_id' => \$data->stst_id))",
        ),
    ),
)); ?>
