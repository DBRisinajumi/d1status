<?php

/**
 * This is the model base class for the table "stfl_flow".
 *
 * Columns in table "stfl_flow" available as properties of the model:
 * @property integer $stfl_id
 * @property string $stfl_name
 * @property string $stfl_table
 * @property string $stfl_field
 * @property string $stfl_notes
 *
 * Relations of table "stfl_flow" available as properties of the model:
 * @property StlgLog[] $stlgLogs
 * @property StsfStatesFlow[] $stsfStatesFlows
 */
abstract class BaseStflFlow extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'stfl_flow';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('stfl_name', 'required'),
			array('stfl_table, stfl_field, stfl_notes', 'default', 'setOnEmpty' => true, 'value' => null),
			array('stfl_name', 'length', 'max'=>50),
			array('stfl_table, stfl_field', 'length', 'max'=>255),
			array('stfl_notes', 'safe'),
			array('stfl_id, stfl_name, stfl_table, stfl_field, stfl_notes', 'safe', 'on'=>'search'),
		    )
		);
	}

	public function behaviors()
	{
		return array_merge(
		    parent::behaviors(), array(
			'savedRelated' => array(
				'class' => 'gii-template-collection.components.CSaveRelationsBehavior'
			)
		    )
		);
	}

	public function relations()
	{
		return array(
			'stlgLogs' => array(self::HAS_MANY, 'StlgLog', 'stlg_stfl_id'),
			'stsfStatesFlows' => array(self::HAS_MANY, 'StsfStatesFlow', 'stsf_stfl_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'stfl_id' => Yii::t('D1Status.crud', 'Stfl'),
			'stfl_name' => Yii::t('D1Status.crud', 'Stfl Name'),
			'stfl_table' => Yii::t('D1Status.crud', 'Stfl Table'),
			'stfl_field' => Yii::t('D1Status.crud', 'Stfl Field'),
			'stfl_notes' => Yii::t('D1Status.crud', 'Stfl Notes'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.stfl_id', $this->stfl_id);
		$criteria->compare('t.stfl_name', $this->stfl_name, true);
		$criteria->compare('t.stfl_table', $this->stfl_table, true);
		$criteria->compare('t.stfl_field', $this->stfl_field, true);
		$criteria->compare('t.stfl_notes', $this->stfl_notes, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
