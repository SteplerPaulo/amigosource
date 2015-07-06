<?php
class FactoriesController extends AppController {

	var $name = 'Factories';

	function index() {
		$this->Factory->recursive = 0;
		$this->set('factories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid factory', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('factory', $this->Factory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Factory->create();
			if ($this->Factory->save($this->data)) {
				$this->Session->setFlash(__('The factory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factory could not be saved. Please, try again.', true));
			}
		}
		$businesses = $this->Factory->Business->find('list');
		$this->set(compact('businesses'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid factory', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Factory->save($this->data)) {
				$this->Session->setFlash(__('The factory has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The factory could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Factory->read(null, $id);
		}
		$businesses = $this->Factory->Business->find('list');
		$this->set(compact('businesses'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for factory', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Factory->delete($id)) {
			$this->Session->setFlash(__('Factory deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Factory was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
