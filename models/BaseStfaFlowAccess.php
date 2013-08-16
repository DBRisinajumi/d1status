<?php

/**
 * This is the model base class for the table "stfa_flow_access".
 *
 * Columns in table "stfa_flow_access" available as properties of the model:
 * @property string $stfa_id
 * @property integer $stfa_stsf_id
 * @property string $stfa_authitem
 * @property string $stfa_notes
 *
 * Relations of table "stfa_flow_access" available as properties of the model:
 * @property Authitem $stfaAuthitem
 * @property StsfStatesFlow $stfaStsf
 */
abstract class BaseStfaFlowAccess extends CActiveRecord{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'stfa_flow_access';
	}

	public function rules()
	{
		return array_merge(
		    parent::rules(), array(
			array('stfa_stsf_id, stfa_authitem', 'required'),
			array('stfa_notes', 'default', 'setOnEmpty' => true, 'value' => null),
			array('stfa_stsf_id', 'numerical', 'integerOnly'=>true),
			array('stfa_authitem', 'length', 'max'=>64),
			array('stfa_notes', 'safe'),
			array('stfa_id, stfa_stsf_id, stfa_authitem, stfa_notes', 'safe', 'on'=>'search'),
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
			'stfaAuthitem' => array(self::BELONGS_TO, 'Authitem', 'stfa_authitem'),
			'stfaStsf' => array(self::BELONGS_TO, 'StsfStatesFlow', 'stfa_stsf_id'),
		);
	}

	public function attributeLabels()
	{
		return array(
			'stfa_id' => Yii::t('crud', 'Stfa'),
			'stfa_stsf_id' => Yii::t('crud', 'Stfa Stsf'),
			'stfa_authitem' => Yii::t('crud', 'Stfa Authitem'),
			'stfa_notes' => Yii::t('crud', 'Stfa Notes'),
		);
	}


	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('t.stfa_id', $this->stfa_id, true);
		$criteria->compare('t.stfa_stsf_id', $this->stfa_stsf_id);
		$criteria->compare('t.stfa_authitem', $this->stfa_authitem);
		$criteria->compare('t.stfa_notes', $this->stfa_notes, true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}

}
