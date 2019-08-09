<!DOCTYPE html>
<html>
<head>
 <?php echo $this->Html->css('/css/bootstrap.min.css');?>
 <?php echo $this->Html->css('/css/theme.min.css');?>
</head>
 <body>
 	<div class="fluid">
 		<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
 		  <a class="navbar-brand" href="#">CakeBlog</a>
 		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
 		    <span class="navbar-toggler-icon"></span>
 		  </button>

 		  <div class="collapse navbar-collapse" id="navbarColor01">
 		    <ul class="navbar-nav mr-auto">
 		      <li class="nav-item active">
 		        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
 		      </li>
 		      
 		    </ul>
 		    <form class="form-inline my-2 my-lg-0">
 		    	<a class="btn btn-link"></a><a class="btn btn-link"></a>
 		    		<?php
 		    		if(empty($this->Session->read('Auth'))) {
 		    		   // user is logged in, show logout..user menu etc
 		    		   	echo $this->Html->link(
 		    			 		       	    	'Login',
 		    			 		       	   		 Router::url('/user/login/', true),
 		    			 		       	   		 ['class' => 'btn btn-info']
 		    			 		       			); 
 		    		} else{ 
 		    		 		// the user is not logged in
 		    		 		echo $this->Html->link(
	 		    		    	 		       	   'Logout',
	 		    		    	 		       	    Router::url('/user/logout/', true),
	 		    		    	 		       	    ['class' => 'btn btn-danger']
	 		    		    	 		       		); 
 		    		 		       //echo $this->Html->link('Login', array('controller' => 'registrations', 'action' => 'login')); 
 		    		}
 		    		?>
 		    	
 		    	
 		    		<?php
 		    		 		    
 		    		 		// the user is not registered
 		    		 		echo $this->Html->link(
 		    			 	   	 		       	   'Register',
 		    			 	   	 		       	    Router::url('/user/register/', true),
 		    			 	   	 		       	    ['class' => 'btn btn-warning']
 		    			 	  	 		       		); 
 		    		 		       //echo $this->Html->link('Login', array('controller' => 'registrations', 'action' => 'login')); 
 		    		 		    
 		    		 		    ?>
 		    	
 		    </form>
 		  </div>
 		</nav>
 		<div class="header">
 			<div class="row">
 				
 			</div>
 		</div>
 		<div class="container">
 			<!-- <div class="col-md-6">
 				
 			</div>
 			<div class="col-md-6"></div>
 			  <div class="card border-primary mb-3 ml-5" style="max-width: 60rem;">
  				<div class="card-header">Importance</div>
  				  <div class="card-body">
  				    <h4 class="card-title">CakeBlog Web Application</h4>
  				    <p class="card-text">Application for crud operation using Cakephp framework.Try using it.Work is in progress. Give feedback.</p>
  				  </div>
  				</div>
  			 </div>
				
				<div class="row">
					
				</div> -->
 			  <p>
 			  	
 				<?php// echo $content_for_layout;?>
 			  </p>
 			  <?php echo $this->fetch('content'); ?>
 			
 		</div>

 		<div class="footer">

 			<div class="alert alert-dismissible alert-primary">
 			 <center>
 			 	
 			  <strong>&copy;2019 	All Rights Reserved!!</strong> Work In Progress <a href="#" class="alert-link">Visit Again.</a>
 			 </center>
 			</div>

 		</div>
 	</div>
 <?php echo $this->Html->script('/js/bootstrap.min.js');?>
  <?php echo $this->Html->script('/js/jquery.js');?>
</body>
</html>

