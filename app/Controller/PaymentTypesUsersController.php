<?php
App::uses('AppController', 'Controller');
/**
 * PaymentTypesUsers Controller
 *
 * @property PaymentTypesUser $PaymentTypesUser
 */
class PaymentTypesUsersController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentTypesUser->recursive = 0;
		$this->set('paymentTypesUsers', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PaymentTypesUser->exists($id)) {
			throw new NotFoundException(__('Invalid payment types user'));
		}
		$options = array('conditions' => array('PaymentTypesUser.' . $this->PaymentTypesUser->primaryKey => $id));
		$this->set('paymentTypesUser', $this->PaymentTypesUser->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentTypesUser->create();
			if ($this->PaymentTypesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The payment types user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment types user could not be saved. Please, try again.'));
			}
		}
		$paymentTypes = $this->PaymentTypesUser->PaymentType->find('list');
		$users = $this->PaymentTypesUser->User->find('list');
		$this->set(compact('paymentTypes', 'users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PaymentTypesUser->exists($id)) {
			throw new NotFoundException(__('Invalid payment types user'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentTypesUser->save($this->request->data)) {
				$this->Session->setFlash(__('The payment types user has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment types user could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentTypesUser.' . $this->PaymentTypesUser->primaryKey => $id));
			$this->request->data = $this->PaymentTypesUser->find('first', $options);
		}
		$paymentTypes = $this->PaymentTypesUser->PaymentType->find('list');
		$users = $this->PaymentTypesUser->User->find('list');
		$this->set(compact('paymentTypes', 'users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PaymentTypesUser->id = $id;
		if (!$this->PaymentTypesUser->exists()) {
			throw new NotFoundException(__('Invalid payment types user'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PaymentTypesUser->delete()) {
			$this->Session->setFlash(__('Payment types user deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment types user was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
