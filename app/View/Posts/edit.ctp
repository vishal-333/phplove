 <?php 
 echo $this->element('flashMessages');?>
<div class="row" align="right">
 <?php
 // echo $this->Html->link(
 //     'Add User',
 //     array('controller' => 'registrations', 'action' => 'register')
 // );

 echo $this->Form->create('Post');
 // echo $this->Form->input('username');
 echo $this->Form->input('title',array('required' =>  false));
 echo $this->Form->input('body',array('required' => false));
 echo $this->Form->end('Save Post');
 ?>
</div>