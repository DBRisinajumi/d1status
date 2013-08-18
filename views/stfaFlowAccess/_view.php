<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('stfa_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stfa_id), array('view', 'stfa_id'=>$data->stfa_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfa_stsf_id')); ?>:</b>
	<?php echo CHtml::encode($data->stfa_stsf_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfa_authitem')); ?>:</b>
	<?php echo CHtml::encode($data->stfa_authitem); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfa_notes')); ?>:</b>
	<?php echo CHtml::encode($data->stfa_notes); ?>
	<br />


</div>
