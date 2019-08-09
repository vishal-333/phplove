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
 		      <li class="nav-item">
 		        <a class="nav-link" href="#">Features</a>
 		      </li>
 		      <li class="nav-item">
 		        <a class="nav-link" href="#">Pricing</a>
 		      </li>
 		      <li class="nav-item">
 		        <a class="nav-link" href="#">About</a>
 		      </li>
 		    </ul>


 		    <form class="form-inline my-2 my-lg-0">
 		    	<button>
 		    		<?php
 		    		if(!empty($this->Session->read('Auth'))) {
 		    		   // user is logged in, show logout..user menu etc
 		    		   	echo $this->Html->link(
 		    			 		       	    	'Login',
 		    			 		       	   		 Router::url('/user/login/', true)
 		    			 		       			); 
 		    		}else{ 
 		    		 		       // the user is not logged in
 		    		 		echo $this->Html->link(
	 		    		    	 		       	   'Logout',
	 		    		    	 		       	    Router::url('/user/logout/', true)
	 		    		    	 		       		); 
 		    		 		       //echo $this->Html->link('Login', array('controller' => 'registrations', 'action' => 'login')); 
 		    		}
 		    		?>
 		    	</button>
 		    	<button>
 		    		<?php
 		    		 		    
 		    		 		// the user is not registered
 		    		 		echo $this->Html->link(
 		    			 	   	 		       	   'Register',
 		    			 	   	 		       	    Router::url('/user/register/', true)
 		    			 	  	 		       		); 
 		    		 		       //echo $this->Html->link('Login', array('controller' => 'registrations', 'action' => 'login')); 
 		    		 		    
 		    		 		    ?>
 		    	</button>
 		    
 		    </form>

 		   

 		    
 		  </div>
 		</nav>
 		<div class="header">
 			<div class="row">
				

 				
 				
 			</div>
 		</div>
 		<div class="content">
 			<div class="jumbotron">
 			  <h4 class="display-4"><center>CakeBlog Web Application</center> </h4>
 			  <p class="lead">
 			  	
 				<?php //echo $content_for_layout;?>
 			  </p>
 			  <?php echo $this->fetch('content'); ?>
 			</div>
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

