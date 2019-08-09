<?php
	//Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));
	Router::connect('/', array('controller' => 'posts', 'action' => 'home'));
/**
 * ...and connect the rest of 'Pages' controller's URLs.
 */
	Router::connect('/post/view/*', array('controller' => 'posts', 'action' => 'view'));

	Router::connect('/post/add/*', array('controller' => 'posts', 'action' => 'add'));

	Router::connect('/post/edit/*', array('controller' => 'posts', 'action' => 'edit'));

	//Router::connect('/post/delete/*', array('controller' => 'posts', 'action' => 'delete'));
	
	Router::connect('/post/delete/:id', array('controller' => 'posts', 'action' => 'delete'));
	
	Router::connect('/user/login/*', array('controller' => 'registrations', 'action' => 'login'));
	
	Router::connect('/user/register/*', array('controller' => 'registrations', 'action' => 'register'));

	Router::connect('/user/home/*', array('controller' => 'registrations', 'action' => 'home'));

	Router::connect('/user/logout/*', array('controller' => 'registrations', 'action' => 'logout'));

	Router::connect('/posts/*', array('controller' => 'posts', 'action' => 'index'));

	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes. See the CakePlugin documentation on
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Load the CakePHP default routes. Only remove this if you do not want to use
 * the built-in default routes.
 */
	require CAKE . 'Config' . DS . 'routes.php';
