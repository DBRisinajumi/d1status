<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('stsf_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stsf_id), array('view', 'stsf_id'=>$data->stsf_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stsf_stfl_id')); ?>:</b>
	<?php echo CHtml::encode($data->stsf_stfl_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stsf_prev_stst_id')); ?>:</b>
	<?php echo CHtml::encode($data->stsf_prev_stst_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stsf_next_stst_id')); ?>:</b>
	<?php echo CHtml::encode($data->stsf_next_stst_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stsf_notes')); ?>:</b>
	<?php echo CHtml::encode($data->stsf_notes); ?>
	<br />


</div>
