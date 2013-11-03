<?php
echo CHtml::openTag('div', array('id' => $id));
//$htmlOptions['empty'] = Yii::t('D1StatusModule.crud','Change status to');
$htmlOptions['empty'] = 'Change status to';
echo CHtml::ActiveListBox(
    $model,
    $field,
    $data,
    $htmlOptions
);

echo CHtml::closeTag('div');