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

	/////////////////////////////////////////////////////////////
	public function admin_switch($field = null, $id = null) {
        $this->autoRender = false;
        $model = $this->modelClass;
        if ($this->$model && $field && $id) {
            $field = $this->$model->escapeField($field);
            return $this->$model->updateAll(array($field => '1 -' . $field), array($this->$model->escapeField() => $id));
        }
        if(!$this->RequestHandler->isAjax()) {
            return $this->redirect($this->referer());
        }
    }
	
	
	////////////////////////////////////////////////////////////
    public function admin_editable() {
        $model = $this->modelClass;

        $id = trim($this->params['form']['pk']);
        $field = trim($this->params['form']['name']);
        $value = trim($this->params['form']['value']);

        $data[$model]['id'] = $id;
        $data[$model][$field] = $value;
        $this->$model->save($data, false);

        $this->autoRender = false;

    }

	////////////////////////////////////////////////////////////
    public function admin_tagschanger() {

        $value = '';

        asort($this->params['form']['value']);

        foreach ($this->params['form']['value'] as $k => $v) {
            $value .= $v . ', ';
        }

        $value = trim($value);
        $value = rtrim($value, ',');


        $this->Product->id = $this->params['form']['pk'];
        $s = $this->Product->saveField('tags', $value, false);

        $this->autoRender = false;

    }
	////////////////////////////////////////////////////////////
}
