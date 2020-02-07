<?php 

echo $this->Form->create('Users', array('controller' => 'Users', 'action' => 'createUser'));
echo $this->Form->input('username');
echo $this->Form->end('Register');

 ?>