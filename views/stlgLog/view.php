<?php
$this->breadcrumbs['Stlg Logs'] = array('index');
$this->breadcrumbs[] = $model->stlg_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->stlg_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stlg_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> StlgLog <?php echo $model->stlg_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'stlg_id',
		array(
			'name'=>'stlg_stfl_id',
			'value'=>($model->stlgStfl !== null)?CHtml::link($model->stlgStfl->stfl_name, array('stflFlow/view','stfl_id'=>$model->stlgStfl->stfl_id)).' '.CHtml::link(Yii::t('app','Update'), array('stflFlow/update','stfl_id'=>$model->stlgStfl->stfl_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		'stlg_record_id',
		array(
			'name'=>'stlg_user_id',
			'value'=>($model->stlgUser !== null)?CHtml::link($model->stlgUser->username, array('sUsers/view','id'=>$model->stlgUser->id)).' '.CHtml::link(Yii::t('app','Update'), array('sUsers/update','id'=>$model->stlgUser->id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		array(
			'name'=>'stlg_stst_id',
			'value'=>($model->stlgStst !== null)?CHtml::link($model->stlgStst->stst_name, array('ststState/view','stst_id'=>$model->stlgStst->stst_id)).' '.CHtml::link(Yii::t('app','Update'), array('ststState/update','stst_id'=>$model->stlgStst->stst_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		'stlg_datetime',
),
)); ?>


