<?php
App::uses('AppController', 'Controller');
/**
 * Itemtypes Controller
 *
 * @property Itemtype $Itemtype
 */
class ItemtypesController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Itemtype->recursive = 0;
		$this->set('itemtypes', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Itemtype->id = $id;
		if (!$this->Itemtype->exists()) {
			throw new NotFoundException(__('Invalid itemtype'));
		}
		$this->set('itemtype', $this->Itemtype->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Itemtype->create();
			if ($this->Itemtype->save($this->request->data)) {
				$this->Session->setFlash(__('The itemtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itemtype could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Itemtype->id = $id;
		if (!$this->Itemtype->exists()) {
			throw new NotFoundException(__('Invalid itemtype'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Itemtype->save($this->request->data)) {
				$this->Session->setFlash(__('The itemtype has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The itemtype could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Itemtype->read(null, $id);
		}
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
		$this->Itemtype->id = $id;
		if (!$this->Itemtype->exists()) {
			throw new NotFoundException(__('Invalid itemtype'));
		}
		if ($this->Itemtype->delete()) {
			$this->Session->setFlash(__('Itemtype deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Itemtype was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
