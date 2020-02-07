
<?php
class SamplesController extends AppController {
    public $name = 'Samples';
    public $uses = array("Sample");
	
    public function lists() {
        // set('送信する変数名',$this->Model名->find('条件'));
        $data = $this->Sample->find('all');
        $this->set('data', $data);
    }
}