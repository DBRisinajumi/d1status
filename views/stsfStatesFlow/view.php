<?php
$this->breadcrumbs['Stsf States Flows'] = array('index');
$this->breadcrumbs[] = $model->stsf_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->stsf_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stsf_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> StsfStatesFlow <?php echo $model->stsf_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'stsf_id',
		array(
			'name'=>'stsf_stfl_id',
			'value'=>($model->stsfStfl !== null)?CHtml::link($model->stsfStfl->stfl_name, array('stflFlow/view','stfl_id'=>$model->stsfStfl->stfl_id)).' '.CHtml::link(Yii::t('app','Update'), array('stflFlow/update','stfl_id'=>$model->stsfStfl->stfl_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		array(
			'name'=>'stsf_prev_stst_id',
			'value'=>($model->stsfPrevStst !== null)?CHtml::link($model->stsfPrevStst->stst_name, array('ststState/view','stst_id'=>$model->stsfPrevStst->stst_id)).' '.CHtml::link(Yii::t('app','Update'), array('ststState/update','stst_id'=>$model->stsfPrevStst->stst_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		array(
			'name'=>'stsf_next_stst_id',
			'value'=>($model->stsfNextStst !== null)?CHtml::link($model->stsfNextStst->stst_name, array('ststState/view','stst_id'=>$model->stsfNextStst->stst_id)).' '.CHtml::link(Yii::t('app','Update'), array('ststState/update','stst_id'=>$model->stsfNextStst->stst_id), array('class'=>'edit')):'n/a',
			'type'=>'html',
		),
		'stsf_notes',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','StfaFlowAccesses'), array('stfaFlowAccess/admin'));?></h2>
<ul>
				<?php if (is_array($model->stfaFlowAccesses)) foreach($model->stfaFlowAccesses as $foreignobj) { 

					echo '<li>';
					echo CHtml::link($foreignobj->stfa_notes, array('stfaFlowAccess/view','stfa_id'=>$foreignobj->stfa_id));

						echo ' '.CHtml::link(Yii::t('app','Update'), array('stfaFlowAccess/update','stfa_id'=>$foreignobj->stfa_id), array('class'=>'edit'));

				}
			?></ul><p><?php echo CHtml::link(
				Yii::t('app','Create'),
				array('stfaFlowAccess/create', 'StfaFlowAccess' => array('stfa_stsf_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p>