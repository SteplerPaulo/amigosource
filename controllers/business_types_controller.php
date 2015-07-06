<?php
class BusinessTypesController extends AppController {

	var $name = 'BusinessTypes';

	
	function index() {
		if($this->RequestHandler->accepts('js')){		
			$this->header('Content-Type: application/javascript');
			$this->BusinessType->recursive=0;
			$businessTypes = $this->BusinessType->findForJS('all',array('fields'=>array('id','name')));
			$this->set(compact('businessTypes'));
		}else{
			$this->BusinessType->recursive = 0;
			$this->set('businessTypes', $this->paginate());
		}
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid business type', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('businessType', $this->BusinessType->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->BusinessType->create();
			if ($this->BusinessType->save($this->data)) {
				$this->Session->setFlash(__('The business type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business type could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid business type', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->BusinessType->save($this->data)) {
				$this->Session->setFlash(__('The business type has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The business type could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->BusinessType->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for business type', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->BusinessType->delete($id)) {
			$this->Session->setFlash(__('Business type deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Business type was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
