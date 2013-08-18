<?php
$this->breadcrumbs['Stst States'] = array('index');
$this->breadcrumbs[] = $model->stst_id;

if(!$this->menu)
$this->menu=array(
array('label'=>Yii::t('app', 'Update') , 'url'=>array('update', 'id'=>$model->stst_id)),
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stst_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
array('label'=>Yii::t('app', 'List') , 'url'=>array('index')),
);
?>

<h1><?php echo Yii::t('app', 'View');?> StstState <?php echo $model->stst_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
'data'=>$model,
'attributes'=>array(
		'stst_id',
		'stst_name',
		'stst_code',
		'stst_icon',
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
				array('stlgLog/create', 'StlgLog' => array('stlg_stst_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p><h2><?php echo CHtml::link(Yii::t('app','StsfStatesFlows'), array('stsfStatesFlow/admin'));?></h2>
<ul>
				<?php if (is_array($model->stsfStatesFlows)) foreach($model->stsfStatesFlows as $foreignobj) { 

					echo '<li>';
					echo CHtml::link($foreignobj->stsf_notes, array('stsfStatesFlow/view','stsf_id'=>$foreignobj->stsf_id));

						echo ' '.CHtml::link(Yii::t('app','Update'), array('stsfStatesFlow/update','stsf_id'=>$foreignobj->stsf_id), array('class'=>'edit'));

				}
			?></ul><p><?php echo CHtml::link(
				Yii::t('app','Create'),
				array('stsfStatesFlow/create', 'StsfStatesFlow' => array('stsf_prev_stst_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p><h2><?php echo CHtml::link(Yii::t('app','StsfStatesFlows1'), array('stsfStatesFlow/admin'));?></h2>
<ul>
				<?php if (is_array($model->stsfStatesFlows1)) foreach($model->stsfStatesFlows1 as $foreignobj) { 

					echo '<li>';
					echo CHtml::link($foreignobj->stsf_notes, array('stsfStatesFlow/view','stsf_id'=>$foreignobj->stsf_id));

						echo ' '.CHtml::link(Yii::t('app','Update'), array('stsfStatesFlow/update','stsf_id'=>$foreignobj->stsf_id), array('class'=>'edit'));

				}
			?></ul><p><?php echo CHtml::link(
				Yii::t('app','Create'),
				array('stsfStatesFlow/create', 'StsfStatesFlow' => array('stsf_next_stst_id'=>$model->{$model->tableSchema->primaryKey}))
					);  ?></p>