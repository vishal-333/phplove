 <?php 
 echo $this->element('flashMessages');?>
<div class="row" align="right">
	<?php
	// echo $this->Html->link(
	//     'Add User',
	//     array('controller' => 'registrations', 'action' => 'register')
	// );
	// echo $this->Html->link(
	//     'Login',
	//     array('controller' => 'registrations', 'action' => 'login')
	// ); 

	echo $this->Form->create('Registration');
	// echo $this->Form->input('username');
	echo $this->Form->input('username',array(['class' => 'form-control'],'required' =>  false));
	echo $this->Form->input('password',array(['class' => 'form-control'],'required' => false));
	echo $this->Form->input('email',array(['class' => 'form-control'],'required' => false));
	echo $this->Form->input('mob_no',array(['class' => 'form-control'],'required' => false));
	echo $this->Form->end('Register');
	?>
</div>




