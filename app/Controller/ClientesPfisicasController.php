<?php
App::uses('AppController', 'Controller');
/**
 * ClientesPfisicas Controller
 *
 * @property ClientesPfisica $ClientesPfisica
 * @property PaginatorComponent $Paginator
 */
class ClientesPfisicasController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->ClientesPfisica->recursive = 0;
		$this->set('clientesPfisicas', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ClientesPfisica->exists($id)) {
			throw new NotFoundException(__('Invalid clientes pfisica'));
		}
		$options = array('conditions' => array('ClientesPfisica.' . $this->ClientesPfisica->primaryKey => $id));
		$this->set('clientesPfisica', $this->ClientesPfisica->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ClientesPfisica->create();
//                        $nascimento = date('Y-m-d', $this->request->data['ClientesPfisica']['nascimento']);
//                        $this->request->data['ClientesPfisica']['nascimento'] = $nascimento;
			if ($this->ClientesPfisica->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes pfisica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes pfisica could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->ClientesPfisica->exists($id)) {
			throw new NotFoundException(__('Invalid clientes pfisica'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ClientesPfisica->save($this->request->data)) {
				$this->Session->setFlash(__('The clientes pfisica has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The clientes pfisica could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ClientesPfisica.' . $this->ClientesPfisica->primaryKey => $id));
			$this->request->data = $this->ClientesPfisica->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->ClientesPfisica->id = $id;
		if (!$this->ClientesPfisica->exists()) {
			throw new NotFoundException(__('Invalid clientes pfisica'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ClientesPfisica->delete()) {
			$this->Session->setFlash(__('The clientes pfisica has been deleted.'));
		} else {
			$this->Session->setFlash(__('The clientes pfisica could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
