<?php

/**
 * This is the model base class for the table "stlg_log".
 *
 * Columns in table "stlg_log" available as properties of the model:
 * @property string $stlg_id
 * @property integer $stlg_stfl_id
 * @property string $stlg_record_id
 * @property integer $stlg_user_id
 * @property integer $stlg_stst_id
 * @property string $stlg_datetime
 *
 * Relations of table "stlg_log" available as properties of the model:
 * @property StflFlow $stlgStfl
 * @property StstState $stlgStst
 * @property SUsers $stlgUser
 */
abstract class BaseStlgLog extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'stlg_log';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('stlg_stfl_id, stlg_record_id, stlg_user_id, stlg_stst_id, stlg_datetime', 'required'),
			array('stlg_stfl_id, stlg_user_id, stlg_stst_id', 'numerical', 'integerOnly'=>true),
			array('stlg_record_id', 'length', 'max'=>20),
			array('stlg_id, stlg_stfl_id, stlg_record_id, stlg_user_id, stlg_stst_id, stlg_datetime', 'safe', 'on'=>'search'),
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
			'stlgStfl' => array(self::BELONGS_TO, 'StflFlow', 'stlg_stfl_id'),
			'stlgStst' => array(self::BELONGS_TO, 'StstState', 'stlg_stst_id'),
			'stlgUser' => array(self::BELONGS_TO, 'SUsers', 'stlg_user_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'stlg_id' => Yii::t('D1Status.crud', 'Stlg'),
			'stlg_stfl_id' => Yii::t('D1Status.crud', 'Stlg Stfl'),
			'stlg_record_id' => Yii::t('D1Status.crud', 'Stlg Record'),
			'stlg_user_id' => Yii::t('D1Status.crud', 'Stlg User'),
			'stlg_stst_id' => Yii::t('D1Status.crud', 'Stlg Stst'),
			'stlg_datetime' => Yii::t('D1Status.crud', 'Stlg Datetime'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.stlg_id', $this->stlg_id, true);
		$criteria->compare('t.stlg_stfl_id', $this->stlg_stfl_id);
		$criteria->compare('t.stlg_record_id', $this->stlg_record_id, true);
		$criteria->compare('t.stlg_user_id', $this->stlg_user_id);
		$criteria->compare('t.stlg_stst_id', $this->stlg_stst_id);
		$criteria->compare('t.stlg_datetime', $this->stlg_datetime, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
