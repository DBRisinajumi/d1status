<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('stfl_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stfl_id), array('view', 'stfl_id'=>$data->stfl_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfl_name')); ?>:</b>
	<?php echo CHtml::encode($data->stfl_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfl_table')); ?>:</b>
	<?php echo CHtml::encode($data->stfl_table); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfl_field')); ?>:</b>
	<?php echo CHtml::encode($data->stfl_field); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stfl_notes')); ?>:</b>
	<?php echo CHtml::encode($data->stfl_notes); ?>
	<br />


</div>
