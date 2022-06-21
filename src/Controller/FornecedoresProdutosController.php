<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * FornecedoresProdutos Controller
 *
 * @property \App\Model\Table\FornecedoresProdutosTable $FornecedoresProdutos
 *
 * @method \App\Model\Entity\FornecedoresProduto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class FornecedoresProdutosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $fornecedoresProdutos = $this->paginate($this->FornecedoresProdutos);

        $this->set(compact('fornecedoresProdutos'));
    }

    /**
     * View method
     *
     * @param string|null $id Fornecedores Produto id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $fornecedoresProduto = $this->FornecedoresProdutos->get($id, [
            'contain' => ['Produtos'],
        ]);

        $this->set('fornecedoresProduto', $fornecedoresProduto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $fornecedoresProduto = $this->FornecedoresProdutos->newEntity();
        if ($this->request->is('post')) {
            $fornecedoresProduto = $this->FornecedoresProdutos->patchEntity($fornecedoresProduto, $this->request->getData());
            if ($this->FornecedoresProdutos->save($fornecedoresProduto)) {
                $this->Flash->success(__('The fornecedores produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fornecedores produto could not be saved. Please, try again.'));
        }
        $this->set(compact('fornecedoresProduto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Fornecedores Produto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $fornecedoresProduto = $this->FornecedoresProdutos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $fornecedoresProduto = $this->FornecedoresProdutos->patchEntity($fornecedoresProduto, $this->request->getData());
            if ($this->FornecedoresProdutos->save($fornecedoresProduto)) {
                $this->Flash->success(__('The fornecedores produto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The fornecedores produto could not be saved. Please, try again.'));
        }
        $this->set(compact('fornecedoresProduto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Fornecedores Produto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $fornecedoresProduto = $this->FornecedoresProdutos->get($id);
        if ($this->FornecedoresProdutos->delete($fornecedoresProduto)) {
            $this->Flash->success(__('The fornecedores produto has been deleted.'));
        } else {
            $this->Flash->error(__('The fornecedores produto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
