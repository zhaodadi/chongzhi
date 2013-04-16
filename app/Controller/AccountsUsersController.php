<?php
App::uses('AppController', 'Controller');
/**
 * AccountsUsers Controller
 *
 * @property AccountsUser $AccountsUser
 */
class AccountsUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->AccountsUser->recursive = 0;
		$this->set('accountsUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AccountsUser->exists($id)) {
			throw new NotFoundException(__('Invalid accounts user'));
		}
		$options = array('conditions' => array('AccountsUser.' . $this->AccountsUser->primaryKey => $id));
		$this->set('accountsUser', $this->AccountsUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AccountsUser->create();
			if ($this->AccountsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The accounts user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounts user could not be saved. Please, try again.'));
			}
		}
		$users = $this->AccountsUser->User->find('list');
		$accounts = $this->AccountsUser->Account->find('list');
		$this->set(compact('users', 'accounts'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AccountsUser->exists($id)) {
			throw new NotFoundException(__('Invalid accounts user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->AccountsUser->save($this->request->data)) {
				$this->Session->setFlash(__('The accounts user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The accounts user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AccountsUser.' . $this->AccountsUser->primaryKey => $id));
			$this->request->data = $this->AccountsUser->find('first', $options);
		}
		$users = $this->AccountsUser->User->find('list');
		$accounts = $this->AccountsUser->Account->find('list');
		$this->set(compact('users', 'accounts'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AccountsUser->id = $id;
		if (!$this->AccountsUser->exists()) {
			throw new NotFoundException(__('Invalid accounts user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->AccountsUser->delete()) {
			$this->Session->setFlash(__('Accounts user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Accounts user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
