<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {
	// public function __construct()
	// {
	// 	$route=Router::currentRoute();
	// 	pr($route);
	// 	exit();
	// }

	
	public function beforeFilter()
	{
		//debug($this->Auth->user());exit;
	}

	public $helper	=	array('Html','Form','Session');

	public $components = array('Session',
		'Auth' 	=> array(
			'loginAction' => array(
					'controller' => 'registrations',
				    'action' => 'register',
				    // 'action' => 'login',
				    'plugin' => null,
			),
			
			'authenticate' => array(
			    'Form' => array(
			        'fields' => array(
			          'username' => 'username', //Default is 'username' in the userModel
			          'password' => 'password',  //Default is 'password' in the userModel
			        ),
			    ),
			),
			'authenticate' => array(
				'Basic' => array('userModel' => 'Registration'),
			    'Form' => array('userModel' => 'Registration'),
			),

		),

		 //'authError' => 'Did you really think you are allowed to see that?',
	);

	// $this->Auth->authenticate = array(
	// 		'Basic' => array('userModel' => 'Registration'),
	// 	    'Form' => array('userModel' => 'Registration'),
	// 	);

// public $loginAction = array(
// 		'controller' => 'users',
// 		'action' => 'login',
// 		'plugin' => null
// 	);
}
