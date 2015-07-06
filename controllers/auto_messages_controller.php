<?php
class AutoMessagesController extends AppController {

	var $name = 'AutoMessages';

	function index() {
		$this->AutoMessage->recursive = 0;
		$this->set('autoMessages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid auto message', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('autoMessage', $this->AutoMessage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->AutoMessage->create();
			if ($this->AutoMessage->save($this->data)) {
				$this->Session->setFlash(__('The auto message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auto message could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid auto message', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->AutoMessage->save($this->data)) {
				$this->Session->setFlash(__('The auto message has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The auto message could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->AutoMessage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for auto message', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->AutoMessage->delete($id)) {
			$this->Session->setFlash(__('Auto message deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Auto message was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
