<?php
App::uses('AppController', 'Controller');
/**
 * Items Controller
 *
 * @property Item $Item
 */
class ItemsController extends AppController {

	var $helpers = array('AjaxMultiUpload.Upload'); 
/**
 * index method
 *
 * @return void
 */
	public function index($customer_id = null) {
		$this->loadModel('Customer', $customer_id);
		$this->Item->recursive = 0;
		$this->set('items', $this->paginate());
		if($customer_id != null) {
			$items = $this->Item->find('list', array('conditions' => array('customer_id' => $customer_id)));//, array(
//			  'conditions' => array('customer_id' => $customer_id),
//			  'fields' => array('name', 'email'),
//			  //'order' => 'field3 DESC',
//			  'recursive' => 2,
//			  'group' => 'itemtype_id',
//			  'callbacks' => false,
//			));
//			$this->set('items', $items);
			$this->set('customer_id', $customer_id);
			$customer = $this->Customer->find('all', array(
        'conditions' => array('Customer.id' => $customer_id)));
			$this->set('customer', $customer);
			//debug($customer);
		}
		//debug($items);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		$this->set('item', $this->Item->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Item->create();
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		}
		$itemtypes = $this->Item->Itemtype->find('list');
		$customers = $this->Item->Customer->find('list');
		$this->set(compact('itemtypes', 'customers'));
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Item->save($this->request->data)) {
				$this->Session->setFlash(__('The item has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The item could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Item->read(null, $id);
		}
		$itemtypes = $this->Item->Itemtype->find('list');
		$customers = $this->Item->Customer->find('list');
		$this->set(compact('itemtypes', 'customers'));
	}

/**
 * delete method
 *
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Item->id = $id;
		if (!$this->Item->exists()) {
			throw new NotFoundException(__('Invalid item'));
		}
		if ($this->Item->delete()) {
			$this->Session->setFlash(__('Item deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Item was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
