<div class="row">
	 <?php 

	 echo $this->element('flashMessages');
	// echo $this->validationErrors;

	 // echo $this->Html->link(
	 //     'Add User',
	 //     array('controller' => 'registrations', 'action' => 'login')
	 // );
	 // echo $this->Html->link(
	 //     'Login',
	 //     array('controller' => 'registrations', 'action' => 'login')
	 // ); 

	 echo $this->Form->create('Registration');
	 // echo $this->Form->input('username');
	 echo $this->Form->input('username',array('class' => 'form-control','required' =>  false));
	 echo $this->Form->input('password',array('class' => 'form-control','required' => false));
	 // echo $this->Form->input('email',array('required' => false));
	 // echo $this->Form->input('mob_no',array('required' => false));
	 echo $this->Form->end('Login');?>

	
</div>
 
