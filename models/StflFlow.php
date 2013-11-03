<?php

// auto-loading
Yii::setPathOfAlias('StflFlow', dirname(__FILE__));
Yii::import('StflFlow.*');

class StflFlow extends BaseStflFlow
{
	// Add your model-specific methods here. This file will not be overriden by gtc except you force it.
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function init()
	{
		return parent::init();
	}

	public function get_label() {
		return (string) $this->stfl_name;

	}

	public function behaviors()
	{
            return array_merge(
                parent::behaviors(),
                array(
                    'LoggableBehavior'=>array(
                        'class' => 'LoggableBehavior'
                    )
            ));
	}


	public function rules()
	{
		return array_merge(
		    parent::rules()
            /*, array(
			array('column1, column2', 'rule1'),
			array('column3', 'rule2'),
		    )*/
		);
	}
    
    public function listData($table, $field, $stst_id) {
        $sql = "
            SELECT 
              stst_id,
              stst_code,
              stfa_authitem
            FROM
              stfl_flow 
              INNER JOIN stsf_states_flow 
                ON stfl_id = stsf_stfl_id 
              INNER JOIN stst_state 
                ON stsf_next_stst_id = stst_id 
              INNER JOIN stfa_flow_access 
                ON stsf_id = stfa_stsf_id                 
            WHERE stfl_table = '" . $table . "' 
              AND stfl_field = '" . $field . "' 
              AND stsf_prev_stst_id = " . $stst_id . "             
            ";
        return Yii::app()->db->createCommand($sql)->queryAll();
    }

}
