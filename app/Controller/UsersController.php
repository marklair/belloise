<?php
App::uses('AppController', 'Controller');
/**
 * Users Controller
 *
 * @property User $User
 */
class UsersController extends AppController {

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

	public function login() {
		if ($this->request->is('post')) {
			if ($this->Auth->login()) {
				$this->Session->setFlash(__('you are logged in', null),
					'default',
					array('class' => 'flash-message-success'));
				$this->redirect($this->Auth->redirect());
			} else {
				$this->Session->setFlash(__('Invalid username or password, try again'));
			}
		}
		$myself = ($this->Auth->user());
		
		$this->set('myself', $myself);
		
		
		//print_r($myself); // use to debug user
	}

	function logout() { 
	    $this->Session->setFlash('You have successfully logged out');
		$this->Session->destroy();
		$this->redirect($this->Auth->logout());
	        
		//	$this->Session->setFlash('You have successfully logged out'); 
	    //  $this->Auth->logout(); 
	    //  $this->redirect(array('action'=>'login')); 
	                //$this->redirect($this->Auth->logout()); 
	    } 

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());

		if ($this->Auth->user('role') == 'admin') {
			$users = $this->paginate('User',array(
				'role' => array (
						'admin',
						'employee',
						'seller'
					)
				)
			);
		} elseif($this->Auth->user('role') == 'employee') {
			$users = $this->paginate('User',array(
				'role' => array (
						'employee',
						'seller'
					),
				)
			);
		} else {
			$users = $this->paginate('User',array(
				'role' => array (
						'employee',
						'seller'
					),
				)
			);
		}

		
		$this->set('users', $users);
		//debug($this->Auth->user());
		//debug($this->Session);
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->User->create();
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
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
		$this->User->id = $id;
		//debug($this->params);
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->User->save($this->request->data)) {
				$this->Session->setFlash(__('The user has been saved', null), 
					'default',
					array('class' => 'flash-message-success'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->User->read(null, $id);
		}

		$this->set('user', $id);
		$this->set('targetuser', $this->User->read(null, $id));
		//debug($this->User->role);

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
		$this->User->id = $id;
		if (!$this->User->exists()) {
			throw new NotFoundException(__('Invalid user'));
		}
		if ($this->User->delete()) {
			$this->Session->setFlash(__('User deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
