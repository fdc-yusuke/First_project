<?php 
class Sample extends AppModel{
    public $name = 'Sample';
 
    public $validate = array(
        'name' => array(
            'rule' => array('between',0,10),
            'required' => true,
            'alloEmpty' => false,
            'message' => '10文字以内で必ず入力して下さい'
        ),
        'age' => array(
            'rule' => array('custom','/^[0-9]{1,3}$/'),
            'required' => true,
            'alloEmpty' => false,
            'message' => '数字3桁以内で必ず入力して下さい'
            ),
    );
}
 ?>