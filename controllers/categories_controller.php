<?php
class CategoriesController extends AppController {

	var $name = 'Categories';
	var $helpers = array('Html', 'Tree'); 

	function index() {
		$this->Category->recursive = 0;
		$this->set('categories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('category', $this->Category->read(null, $id));
	}

	function admin_index() {
		$this->Category->recursive = 0;
		$this->paginate = array('conditions' => array());		
		$this->set('categories', $this->paginate());
		
		$categoriestree = $this->Category->find('threaded', array(
           'recursive' => -1,
           'order' => array(
               'Category.lft' => 'ASC'
            ),
            'conditions' => array(
            ),
        ));
		
		$this->set(compact('categoriestree'));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		
        $category = $this->Category->find('first', array(
            'contain' => array(
                'ParentCategory'
            ),
            'conditions' => array(
                'Category.id' => $id
            )
        ));
        $this->set(compact('category'));
		
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Category->create();
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		$parents = $this->Category->generateTreeList(null, null, null, ' -- ');
		$this->set(compact('parents'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Category->save($this->data)) {
				$this->Session->setFlash(__('The category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Category->read(null, $id);
		}
		
		
        $parents = $this->Category->generateTreeList(null, null, null, ' -- ');
        $this->set(compact('parents'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Category->delete($id)) {
			$this->Session->setFlash(__('Category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

	/* 
	//FORCE INIT SLUG (Obselete REGEX. Digits are now being accepted)
	function force_slug($status = true){
		if($status == true){
			$results = $this->Category->find('list');
			
			foreach($results as $id => $string){
				$string = str_replace(" ", "-", strtolower(trim($string)));//Convert string to lower case & replace spaces by dash symbol(-)
				$string = preg_replace('/[^A-Za-z:space:\-]/', '', $string); // Removes special chars.
				$string = preg_replace('/-+/', '-', $string);//Remove double dash (--)
				
				
				//DOUBLE CHECK DUPLICATE SLUG
				$this->Category->recursive = 0;
				$catToUpdate = $this->Category->findById($id);
				if(empty($catToUpdate['Category']['slug'])){
						pr($catToUpdate['Category']['parent_id'].' => '. $catToUpdate['Category']['name']);
						$parent = $this->Category->findById($catToUpdate['Category']['parent_id']);
						$string = $parent['Category']['slug'].'-'.$string;
						pr($string);
				}
				
				//SLUG SAVING
				$this->Category->id = $id;
				$this->data['Category']['slug'] = $string;
				$this->Category->save($this->data);
			}
			exit;
		}
	}
	 */

}

