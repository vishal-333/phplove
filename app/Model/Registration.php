<?php
class Registration extends AppModel {

		public $validate = array(
						        'username' => array(
										        	'rule' => 'alphaNumeric',
										        	'message' => 'alphanumeric  allowed',
										        	),
						        'password' => array(
						        					'noblank' => array(
										            				'rule' => 'notEmpty',
										            				'message' => 'Cant be left blank',
										            			),
						        					// 'maxsize' => array(
						        					// 					'rule' => array(
						        					// 								 'maxLength',12
						        					// 							),
						        					// 					'message' => 'Max length must be 12 numbers',
						        					// 				),
						        					'minsize'	=> array(
						        										'rule'	  => array('minLength',6),
						        										'message' => 'Min length must be 6 numbers'
						        									),
						        				),
						        'email'	   => array(
						        					'rule' => 'email',
						        					'message' => 'Provide valid email',
						        				),
						        'mob_no'   => array(	
						        					'rule' => array('between', 6, 12),
						        					'message' => 'Please enter valid mob number between 6 & 12 digits'
						        				),
	    );
}




