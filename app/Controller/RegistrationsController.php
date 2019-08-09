<?php 
Class RegistrationsController extends AppController{
	// public $helper	=	array('Html','Form','Session');
	// public $components = array('Session','Auth');

	public function beforeFilter()
	{
		parent::beforeFilter();
		$this->Auth->allow('register','logout','login');
	}

	public function login()
	{
		if ($this->request->is('post')) {
			 $this->Registration->set($this->request->data);
			 if($this->Registration->validates()){
				    // debug($this->Auth->user());exit;
				if ($this->Auth->login()) {
				    // return $this->redirect($this->Auth->redirectUrl(array('action' => 'home')));
					$this->Session->setFlash('Login successfull'); 	
				    //return $this->redirect($this->redirectUrl('posts'));
				    return $this->redirect(array('controller' => 'Posts' , 'action' => 'index'));

				}
				$this->Session->setFlash('Invalid username or password, try again'); 	
			 }
	         $this->Registration->validationErrors;
    	}
		  
	}

	public function logout()
	{
		return $this->redirect($this->Auth->logout());
	}

	public function home()
	{
		 //return $this->redirect($this->Auth->redirectUrl('posts'));	
	}

	public function register()
	{
		if ($this->request->is('post')) {
		    $this->Registration->create();
		    //debug($this->request->data);exit;
		    $this->Registration->set($this->request->data);
		    if($this->Registration->validates()){
		    	// debug($this->Registration->validationErrors);
		    	// exit();
		    	//debug($this->request->data['Registration']['password']);exit;
		    	$this->request->data['Registration']['password'] = $this->Auth->password($this->request->data['Registration']['password']);
		    	//debug($this->request->data);exit;
		    	if ($this->Registration->save($this->request->data)) { 
		    		//if (false && $this->Registration->save($this->request->data)) { 
		        	$this->Session->setFlash('User registered.');
		        	return $this->redirect(array('action' => 'login'));
		        }else{
		    			//debug($this->Registration->validationErrors);exit;
		        		$this->Session->setFlash('User not registered.');
		    			return $this->redirect(array('action' => 'register'));
		        }
		    }else{
		    		echo $this->Registration->validationErrors;
		    }
		}
	}


}