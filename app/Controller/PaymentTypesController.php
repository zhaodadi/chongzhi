<?php
App::uses('AppController', 'Controller');
/**
 * PaymentTypes Controller
 *
 * @property PaymentType $PaymentType
 */
class PaymentTypesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->PaymentType->recursive = 0;
		$this->set('paymentTypes', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->PaymentType->exists($id)) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		$options = array('conditions' => array('PaymentType.' . $this->PaymentType->primaryKey => $id));
		$this->set('paymentType', $this->PaymentType->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->PaymentType->create();
			if ($this->PaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment type could not be saved. Please, try again.'));
			}
		}
		$users = $this->PaymentType->User->find('list');
		$this->set(compact('users'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->PaymentType->exists($id)) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PaymentType->save($this->request->data)) {
				$this->Session->setFlash(__('The payment type has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The payment type could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('PaymentType.' . $this->PaymentType->primaryKey => $id));
			$this->request->data = $this->PaymentType->find('first', $options);
		}
		$users = $this->PaymentType->User->find('list');
		$this->set(compact('users'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->PaymentType->id = $id;
		if (!$this->PaymentType->exists()) {
			throw new NotFoundException(__('Invalid payment type'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->PaymentType->delete()) {
			$this->Session->setFlash(__('Payment type deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Payment type was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
