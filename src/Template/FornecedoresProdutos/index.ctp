<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FornecedoresProduto[]|\Cake\Collection\CollectionInterface $fornecedoresProdutos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Novo Fornecedor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fornecedoresProdutos index large-10 medium-8 columns content">
<h2><?= __('Lista de fornecedores') ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('cnpj_fornecedor') ?></th>
                <th scope="col"><?= $this->Paginator->sort('razao_social_fornecedor') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($fornecedoresProdutos as $fornecedoresProduto): ?>
            <tr>
                <td><?= $this->Number->format($fornecedoresProduto->id) ?></td>
                <td><?= h($fornecedoresProduto->cnpj_fornecedor) ?></td>
                <td><?= h($fornecedoresProduto->razao_social_fornecedor) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $fornecedoresProduto->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $fornecedoresProduto->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $fornecedoresProduto->id], ['confirm' => __('Tem certeza que quer deletar esse fornecedor?', $fornecedoresProduto->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
        <?= $this->Paginator->first('<< ' . __('Primeira')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Próxima') . ' >') ?>
            <?= $this->Paginator->last(__('Ultima') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}')]) ?></p>
    </div>
</div>
