<?php

App::uses('AppController', 'Controller');

/**
 * Contasbancarias Controller
 *
 * @property Conta $Conta
 * @property PaginatorComponent $Paginator
 */
class ContasController extends AppController {

    /**
     * Components
     *
     * @var array
     */
    public $components = array('Paginator');
    public $helpers = array('Number');

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Conta->recursive = 0;
        $this->set('contas', $this->Paginator->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        if (!$this->Conta->exists($id)) {
            throw new NotFoundException(__('Conta Bancária inválida'));
        }
        $options = array('conditions' => array('Conta.' . $this->Conta->primaryKey => $id));
        $this->set('conta', $this->Conta->find('first', $options));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Conta->create();
            if ($this->Conta->save($this->request->data)) {
                $this->Session->setFlash(__('Conta Bancária cadsatrada com sucesso'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a Conta Bancária, tente novamente.'));
            }
        }
        $bancos = $this->Conta->Banco->find('list', array('fields' => array('id', 'nome')));
        $this->set(compact('bancos'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        if (!$this->Conta->exists($id)) {
            throw new NotFoundException(__('Conta Bancária inválida'));
        }
        if ($this->request->is(array('post', 'put'))) {
            if ($this->Conta->save($this->request->data)) {
                $this->Session->setFlash(__('Conta Bancária cadsatrada com sucesso'));
                return $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Não foi possível salvar a Conta Bancária, tente novamente.'));
            }
        } else {
            $options = array('conditions' => array('Conta.' . $this->Conta->primaryKey => $id));
            $this->request->data = $this->Conta->find('first', $options);
        }
        $bancos = $this->Conta->Banco->find('list', array('fields' => array('id', 'nome')));
        $this->set(compact('bancos'));
    }

    /**
     * delete method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function delete($id = null) {
        $this->Conta->id = $id;
        if (!$this->Conta->exists()) {
            throw new NotFoundException(__('Conta Bancária inválida'));
        }
        $this->request->onlyAllow('post', 'delete');
        if ($this->Conta->delete()) {
            $this->Session->setFlash(__('Conta Bancária removida com sucesso.'));
        } else {
            $this->Session->setFlash(__('Não foi possível remover, tente novamente.'));
        }
        return $this->redirect(array('action' => 'index'));
    }

    private function beforeSave(){
        $saldo_inicial = $this->data['Conta']['saldo_inicial'];
        $saldo_atual = $this->data['Conta']['saldo_atual'];
        
        $saldo_inicial = str_replace('.', '', $saldo_inicial);
        $saldo_inicial = str_replace(',', '.', $saldo_inicial);
        
        $saldo_atual = str_replace('.', '', $saldo_atual);
        $saldo_atual = str_replace(',', '.', $saldo_atual);
        
        $this->data['Conta']['saldo_inicial'] = $saldo_inicial;
        $this->data['Conta']['saldo_atual'] = $saldo_atual;
        
        return true;
    }
    
}
