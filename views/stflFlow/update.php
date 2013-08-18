<?php
$this->breadcrumbs['Stfl Flows'] = array('index');
$this->breadcrumbs[$model->{$model->tableSchema->primaryKey}] = array('view','id'=>$model->{$model->tableSchema->primaryKey});
$this->breadcrumbs[] = Yii::t('app', 'Update');

if(!isset($this->menu) || $this->menu === array())
$this->menu=array(
array('label'=>Yii::t('app', 'Delete') , 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->stfl_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>Yii::t('app', 'Create') , 'url'=>array('create')),
array('label'=>Yii::t('app', 'Manage') , 'url'=>array('admin')),
);
?>

<h1> <?php echo Yii::t('app', 'Update');?> <?php echo Yii::t('app', 'StflFlow');?> #<?php echo $model->stfl_id; ?> </h1>
<?php
$this->renderPartial('_form', array(
'model'=>$model));
?>
