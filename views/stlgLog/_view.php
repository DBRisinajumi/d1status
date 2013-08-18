<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stlg_id), array('view', 'stlg_id'=>$data->stlg_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_stfl_id')); ?>:</b>
	<?php echo CHtml::encode($data->stlg_stfl_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_record_id')); ?>:</b>
	<?php echo CHtml::encode($data->stlg_record_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_user_id')); ?>:</b>
	<?php echo CHtml::encode($data->stlg_user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_stst_id')); ?>:</b>
	<?php echo CHtml::encode($data->stlg_stst_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stlg_datetime')); ?>:</b>
	<?php echo CHtml::encode($data->stlg_datetime); ?>
	<br />


</div>
