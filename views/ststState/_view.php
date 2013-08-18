<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('stst_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->stst_id), array('view', 'stst_id'=>$data->stst_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stst_name')); ?>:</b>
	<?php echo CHtml::encode($data->stst_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stst_code')); ?>:</b>
	<?php echo CHtml::encode($data->stst_code); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stst_icon')); ?>:</b>
	<?php echo CHtml::encode($data->stst_icon); ?>
	<br />


</div>
