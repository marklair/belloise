<?php
App::uses('AppController', 'Controller');
/**
 * Comments Controller
 *
 * @property Comment $Comment
 */
class CommentsController extends AppController {


/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Comment->recursive = 0;
		$this->set('comments', $this->paginate());
	}

/**
 * view method
 *
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		$this->set('comment', $this->Comment->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		$this->Comment->recursive = 1;
		//debug($this->Comment);
		if ($this->request->is('get')) {
			
			//debug($this->params);
			
			if ((isset($this->params['pass']['1'])) && isset($this->params['pass']['0'])) {
				$post_id = ($this->params['pass']['1']);
				$this->set('post_id', $post_id);
				$commentPost = $this->Comment->Post->findById($post_id);			
			}
		} elseif ($this->request->is('post')) {
			$post_id = ($this->params['pass']['1']);
			$commentPost = $this->Comment->Post->findById($post_id);
			//debug($commentPost);
			//debug($this->params);
			// below checks to see if anyone has tampered with the form or URL
			if (
				($this->data['Comment']['user_id'] == $this->Auth->user('id')) && 
				($commentPost['Post']['id'] == $this->data['Comment']['post_id'])) {
				$this->Comment->create();
				if ($this->Comment->save($this->request->data)) {
					$this->Session->setFlash(__('The comment has been saved'));
					$this->redirect(array('action' => 'index'));
				} else {
					$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('A Data Mismatch has occurred.'));
			}
			$this->set('post_id', $post_id);
		}
		$users = $this->Comment->User->find('list');
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('users', 'posts'));
	}

//	public function add() {
//		if ($this->request->is('post')) {
//			$this->Comment->create();
//			if ($this->Comment->save($this->request->data)) {
//				$this->Session->setFlash(__('The comment has been saved'));
//				$this->redirect(array('action' => 'index'));
//			} else {
//				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
//			}
//		}
//		$users = $this->Comment->User->find('list');
//		$posts = $this->Comment->Post->find('list');
//		$this->set(compact('users', 'posts'));
//	}

/**
 * edit method
 *
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('The comment has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The comment could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Comment->read(null, $id);
		}
		$users = $this->Comment->User->find('list');
		$posts = $this->Comment->Post->find('list');
		$this->set(compact('users', 'posts'));
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
		$this->Comment->id = $id;
		if (!$this->Comment->exists()) {
			throw new NotFoundException(__('Invalid comment'));
		}
		if ($this->Comment->delete()) {
			$this->Session->setFlash(__('Comment deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Comment was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
