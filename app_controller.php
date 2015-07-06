<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.app
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppController extends Controller {	
	var $components = array(
		'RequestHandler',
        'Session',
		'Securimage',
		'Auth' => array(
            'loginRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
				'home'
            ),
            'logoutRedirect' => array(
                'controller' => 'pages',
                'action' => 'display',
				'home'
            ),
			'authorize '=>'controller',
			'autoRedirect'=>false,
        ), 
    );
	
	
	function beforeFilter() {
		switch($this->params['controller']){
			case 'pages':
				$this->Auth->allow('*'); 
			break;
			case 'businesses':
				$this->Auth->allow('add','success'); 
			break;
			case 'products':
				$this->Auth->allow('search'); 
			break;
			case 'pictures':
				$this->Auth->allow('add'); 
			break;
			case 'users':   case 'countries': case 'provinces':  case 'barangays': case 'categories': case 'business_types': case 'currencies':
				$this->Auth->allow('index'); 
			break;
		}
		parent::beforeFilter();
	}
}
