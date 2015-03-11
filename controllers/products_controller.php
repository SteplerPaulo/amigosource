<?php
class ProductsController extends AppController {

	var $name = 'Products';
	
	var $components = array('RequestHandler');


	function index() {
		$this->Product->recursive = 0;
		$this->set('products', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
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
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('categories', 'brands'));
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
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('categories', 'brands'));
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
	
	function admin_index() {
		if ($this->RequestHandler->isPost()) {
			
			$conditions[] = array('Product.active' => $this->data['Product']['active']);

            if(!empty($this->data['Product']['brand_id'])) {
               $conditions[] = array('Product.brand_id' => $this->data['Product']['brand_id']);
            }
			
            if(!empty($this->data['Product']['name'])) {
                $filter = $this->data['Product']['filter'];
                $name = $this->data['Product']['name'];
                $conditions[] = array(
                    'Product.' . $filter . ' LIKE' => '%' . $name . '%'
                );
            }
			$this->set('$this->data',$this->data);
        }
		
		//PRODUCTS
		$this->paginate = array(
			'Product' => array(
                'recursive' => 0,
                'limit' => 50,
                'conditions' => isset($conditions)?$conditions:'',
                'order' => array(
                    'Product.name' => 'ASC'
                ),
                'paramType' => 'querystring',
			)
		);
		
		$this->set('products', $this->paginate());

		//BRANDS
		$brands = $this->Product->Brand->findList();
		
		//BRANDS EDITABLE
        $brandseditable = array();
        foreach ($brands as $key => $value) {
            $brandseditable[] = array(
                'value' => $key,
                'text' => $value,
            );
        }
		
		//CATEGORIES
		$categories = $this->Product->Category->generateTreeList(null, null, null, '--');
		
		//CATEGORIES EDITABLE
		$categorieseditable = array();
        foreach ($categories as $key => $value) {
            $categorieseditable[] = array(
                'value' => $key,
                'text' => $value,
            );
        }
		
		//TAGS
        $tags = ClassRegistry::init('Tag')->find('all', array(
            'order' => array(
                'Tag.name' => 'ASC'
            ),
        ));

		$this->set(compact('brands','brandseditable','categorieseditable','tags'));
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid product', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('product', $this->Product->read(null, $id));
	}

	function admin_add() {
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
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('categories', 'brands'));
	}

	function admin_edit($id = null) {
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
		$brands = $this->Product->Brand->find('list');
		$this->set(compact('categories', 'brands'));
	}

	function admin_delete($id = null) {
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
}
