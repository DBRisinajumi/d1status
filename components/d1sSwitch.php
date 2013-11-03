<?php
/**
 * @todo normalizet dizainu
 * @todo parlikt u ajaxu
 */
class d1sSwitch extends CWidget {
 
    public $id;
    public $model;
    public $field;
    public $actual_stst_id;
    public $htmlOptions;
    
 
    public function run() {
        
        $ld = StflFlow::model()->listData($this->model->tableName(), $this->field, $this->actual_stst_id);
        
        $data = array();
        foreach ($ld as $row) {
            if(Yii::app()->user->checkAccess($row['stfa_authitem'])){
                $data[$row['stst_id']] = $row['stst_code'];
            }
            
        }
        
        $this->render('listbox',
                array(
                    'id' => $this->id,
                    'model' => $this->model,
                    'field' => $this->field,
                    'data' => $data,
                    'htmlOptions' => $this->htmlOptions,
                   
                ));
    }
 
}
