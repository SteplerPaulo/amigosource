<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
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
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       cake
 * @subpackage    cake.app
 */
class AppModel extends Model {
	public function findForJS($type,$options = array()){
		$results = $this->find($type,$options);
		$modelName = $this->name;
		$response = array();
		foreach($results as $index=>$result){
			$obj = array();
			foreach($result[$modelName] as $key=>$value){
				$obj[$key]=$value;
			}
			array_push($response,$obj);
		}
		return $response;
	}
	protected function convertToHex($value){
		$conversion = array();
		$new_str = '';
		$str_len = strlen($value);
		for($i = 0; $i < $str_len; $i++) {
			$letter = substr($value, $i, 1);
			if(!isset($conversion[$letter])){
				$conversion[$letter] = '\\x' .dechex(ord($letter));
			}

			$new_str .=  $conversion[$letter];
		}
		return $new_str;
	}
}
