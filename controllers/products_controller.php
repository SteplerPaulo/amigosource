<?php
class ProductsController extends AppController {

	var $name = 'Products';
	
	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($id = null,$slug = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$product = $this->Product->read(null, $id);
		$title_for_layout = $product['Product']['name'];
		$this->set(compact('product', 'title_for_layout'));
		
	}
	
	function add() {
		if (!empty($this->data)) {
			$this->Product->create();
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		$categories = $this->Product->Category->find('list');
		$classifications = $this->Product->Classification->find('list');
		$this->set(compact('categories', 'classifications'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Product->save($this->data)) {
				$this->Session->setFlash(__('The product has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The product could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Product->read(null, $id);
		}
		$categories = $this->Product->Category->find('list');
		$classifications = $this->Product->Classification->find('list');
		$this->set(compact('categories', 'classifications'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for product', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Product->delete($id)) {
			$this->Session->setFlash(__('Product deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Product was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function search(){
		$q = $query =  isset($_GET['q'])?$_GET['q']:null;
		$query = '%'.$query.'%';
		$type =  isset($_GET['type'])?$_GET['type']:null;
		$conditions = array('OR'=>array());
		$results = array();
		$title_for_layout = $q.' - '.Configure::read('BrandName').' Search';
		switch($type){
			case 'products':
				$conditions['OR']['Product.name LIKE'] = $query;
				$conditions['OR']['Product.details LIKE'] = $query;
				$conditions['OR']['Product.specifications LIKE'] = $query;
				$this->Product->recursive = 2;
				$results = $this->Product->find('all',array('conditions'=>$conditions));
				$endpoint = 'products';
			break;
			case 'suppliers': case 'buyers':
				$conditions['OR']['Business.name LIKE'] = $query;
				$conditions['User.user_type'] = Inflector::singularize($type);
				$results = $this->Product->Business->find('all',array('conditions'=>$conditions));
				$endpoint = 'businesses';
			break;
		}
		$this->set(compact('results','endpoint','q','type','title_for_layout'));
		
	}
}
