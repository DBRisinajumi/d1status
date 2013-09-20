<?php

/**
 * This is the model base class for the table "stst_state".
 *
 * Columns in table "stst_state" available as properties of the model:
 * @property integer $stst_id
 * @property string $stst_name
 * @property string $stst_code
 * @property string $stst_icon
 *
 * Relations of table "stst_state" available as properties of the model:
 * @property StlgLog[] $stlgLogs
 * @property StsfStatesFlow[] $stsfStatesFlows
 * @property StsfStatesFlow[] $stsfStatesFlows1
 */
abstract class BaseStstState extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'stst_state';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('stst_name', 'required'),
			array('stst_code, stst_icon', 'default', 'setOnEmpty' => true, 'value' => null),
			array('stst_name, stst_icon', 'length', 'max'=>50),
			array('stst_code', 'length', 'max'=>10),
			array('stst_id, stst_name, stst_code, stst_icon', 'safe', 'on'=>'search'),
		    )
		);
	}

	public function behaviors()
	{
		return array_merge(
		    parent::behaviors(), array(
			'savedRelated' => array(
				'class' => 'vendor.schmunk42.relation.behaviors.GtcSaveRelationsBehavior'
			)
		    )
		);
	}

	public function relations()
	{
		return array(
			'stlgLogs' => array(self::HAS_MANY, 'StlgLog', 'stlg_stst_id'),
			'stsfStatesFlows' => array(self::HAS_MANY, 'StsfStatesFlow', 'stsf_prev_stst_id'),
			'stsfStatesFlows1' => array(self::HAS_MANY, 'StsfStatesFlow', 'stsf_next_stst_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'stst_id' => Yii::t('D1StatusModule.crud', 'Stst'),
			'stst_name' => Yii::t('D1StatusModule.crud', 'Stst Name'),
			'stst_code' => Yii::t('D1StatusModule.crud', 'Stst Code'),
			'stst_icon' => Yii::t('D1StatusModule.crud', 'Stst Icon'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.stst_id', $this->stst_id);
		$criteria->compare('t.stst_name', $this->stst_name, true);
		$criteria->compare('t.stst_code', $this->stst_code, true);
		$criteria->compare('t.stst_icon', $this->stst_icon, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
