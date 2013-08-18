<?php
$this->breadcrumbs['Stfa Flow Accesses'] = array('index');
$this->breadcrumbs[] = $model->stfa_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->stfa_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stfa_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> StfaFlowAccess <?php echo $model->stfa_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'stfa_id',
		array(
			'name'=>'stfa_stsf_id',
			'value'=>($model->stfaStsf !== null)?CHtml::link($model->stfaStsf->stsf_notes, array('stsfStatesFlow/view','stsf_id'=>$model->stfaStsf->stsf_id)).' '.CHtml::link(Yii::t('app','Update'), array('stsfStatesFlow/update','stsf_id'=>$model->stfaStsf->stsf_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		array(
			'name'=>'stfa_authitem',
			'value'=>($model->stfaAuthitem !== null)?CHtml::link($model->stfaAuthitem->type, array('authitem/view','name'=>$model->stfaAuthitem->name)).' '.CHtml::link(Yii::t('app','Update'), array('authitem/update','name'=>$model->stfaAuthitem->name), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		'stfa_notes',
),
)); ?>


