<?php
$this->breadcrumbs['Stfl Flows'] = array('index');
$this->breadcrumbs[] = $model->stfl_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->stfl_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stfl_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> StflFlow <?php echo $model->stfl_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'stfl_id',
		'stfl_name',
		'stfl_table',
		'stfl_field',
		'stfl_notes',
),
)); ?>


<h2><?php echo CHtml::link(Yii::t('app','StlgLogs'), array('stlgLog/admin'));?></h2>
<ul>
				<?php if (is_array($model->stlgLogs)) foreach($model->stlgLogs as $foreignobj) { 

					echo '<li>';
					echo CHtml::link($foreignobj->stlg_record_id, array('stlgLog/view','stlg_id'=>$foreignobj->stlg_id));

						echo ' '.CHtml::link(Yii::t('app','Update'), array('stlgLog/update','stlg_id'=>$foreignobj->stlg_id), array('class'=>'edit'));

				}
			?></ul><p><?php echo CHtml::link(
				Yii::t('app','Create'),
				array('stlgLog/create', 'StlgLog' => array('stlg_stfl_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p><h2><?php echo CHtml::link(Yii::t('app','StsfStatesFlows'), array('stsfStatesFlow/admin'));?></h2>
<ul>
				<?php if (is_array($model->stsfStatesFlows)) foreach($model->stsfStatesFlows as $foreignobj) { 

					echo '<li>';
					echo CHtml::link($foreignobj->stsf_notes, array('stsfStatesFlow/view','stsf_id'=>$foreignobj->stsf_id));

						echo ' '.CHtml::link(Yii::t('app','Update'), array('stsfStatesFlow/update','stsf_id'=>$foreignobj->stsf_id), array('class'=>'edit'));

				}
			?></ul><p><?php echo CHtml::link(
				Yii::t('app','Create'),
				array('stsfStatesFlow/create', 'StsfStatesFlow' => array('stsf_stfl_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p>