<?php

/**
 * This is the model base class for the table "stsf_states_flow".
 *
 * Columns in table "stsf_states_flow" available as properties of the model:
 * @property integer $stsf_id
 * @property integer $stsf_stfl_id
 * @property integer $stsf_prev_stst_id
 * @property integer $stsf_next_stst_id
 * @property string $stsf_notes
 *
 * Relations of table "stsf_states_flow" available as properties of the model:
 * @property StfaFlowAccess[] $stfaFlowAccesses
 * @property StflFlow $stsfStfl
 * @property StstState $stsfPrevStst
 * @property StstState $stsfNextStst
 */
abstract class BaseStsfStatesFlow extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'stsf_states_flow';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('stsf_stfl_id, stsf_next_stst_id', 'required'),
			array('stsf_prev_stst_id, stsf_notes', 'default', 'setOnEmpty' => true, 'value' => null),
			array('stsf_stfl_id, stsf_prev_stst_id, stsf_next_stst_id', 'numerical', 'integerOnly'=>true),
			array('stsf_notes', 'safe'),
			array('stsf_id, stsf_stfl_id, stsf_prev_stst_id, stsf_next_stst_id, stsf_notes', 'safe', 'on'=>'search'),
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
			'stfaFlowAccesses' => array(self::HAS_MANY, 'StfaFlowAccess', 'stfa_stsf_id'),
			'stsfStfl' => array(self::BELONGS_TO, 'StflFlow', 'stsf_stfl_id'),
			'stsfPrevStst' => array(self::BELONGS_TO, 'StstState', 'stsf_prev_stst_id'),
			'stsfNextStst' => array(self::BELONGS_TO, 'StstState', 'stsf_next_stst_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'stsf_id' => Yii::t('D1Status.crud', 'Stsf'),
			'stsf_stfl_id' => Yii::t('D1Status.crud', 'Stsf Stfl'),
			'stsf_prev_stst_id' => Yii::t('D1Status.crud', 'Stsf Prev Stst'),
			'stsf_next_stst_id' => Yii::t('D1Status.crud', 'Stsf Next Stst'),
			'stsf_notes' => Yii::t('D1Status.crud', 'Stsf Notes'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.stsf_id', $this->stsf_id);
		$criteria->compare('t.stsf_stfl_id', $this->stsf_stfl_id);
		$criteria->compare('t.stsf_prev_stst_id', $this->stsf_prev_stst_id);
		$criteria->compare('t.stsf_next_stst_id', $this->stsf_next_stst_id);
		$criteria->compare('t.stsf_notes', $this->stsf_notes, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
