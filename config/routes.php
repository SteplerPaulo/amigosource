<?php
/**
 * Routes Configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
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
 * @subpackage    cake.app.config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */

/**
 * Here, we are connecting '/' (base path) to controller called 'Pages',
 * its action called 'display', and we pass a param to select the view file
 * to use (in this case, /app/views/pages/home.ctp)...
 */
	Router::connect('/', array('controller' => 'pages', 'action' => 'display', 'home'));

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/dashboard', array('controller' => 'pages', 'action' => 'display','dashboard'));	
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));
	Router::connect('/register', array('controller' => 'businesses', 'action' => 'add'));	
	Router::connect('/login', array('controller' => 'users', 'action' => 'login'));	
	Router::connect('/success', array('controller' => 'businesses', 'action' => 'success'));	
	Router::connect('/search', array('controller' => 'products', 'action' => 'search'));	
	Router::connect('/auction-platform', array('controller' => 'pages', 'action' => 'display','auction-platform'));	
	Router::connect('/login-landing-page', array('controller' => 'pages', 'action' => 'display','login-landing-page'));	
	Router::connect('/create-project', array('controller' => 'pages', 'action' => 'display','create-project'));	
	Router::connect('/view-projects', array('controller' => 'pages', 'action' => 'display','view-projects'));	
	Router::connect('/view-project-details', array('controller' => 'pages', 'action' => 'display','view-project-details'));	
	
	Router::parseExtensions('js','json');
