<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto[]|\Cake\Collection\CollectionInterface $produtos
 */
?>


<nav class="barra-lateral large-2 medium-2 columns" id="actions-sidebar">
    <ul class="barra-lateral side-nav">
        <li class="barra-lateral heading"><?= __('Ações') ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Novo produto'), ['action' => 'add']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Lista de fornecedores'), ['controller' => 'FornecedoresProdutos', 'action' => 'index']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Novo fornecedor'), ['controller' => 'FornecedoresProdutos', 'action' => 'add']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Lista de categorias'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Nova categoria'), ['controller' => 'CategoriasProdutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos index large-10 medium-8 columns content">
    <h2><?= __('Lista de produtos') ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao_produto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantidade_estoque') ?></th>
                <th scope="col"><?= $this->Paginator->sort('fornecedores_produto_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('categorias_produto_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produtos as $produto): ?>
            <tr>
                <td><?= $this->Number->format($produto->id) ?></td>
                <td><?= h($produto->nome_produto) ?></td>
                <td><?= h($produto->descricao_produto) ?></td>
                <td><?= $this->Number->format($produto->quantidade_estoque) ?></td>
                <td><?= h($produto->fornecedores_produto->razao_social_fornecedor)  ?></td>
                <td><?= h($produto->categorias_produto->nome_categoria)?></td>
                <td class="Ações">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $produto->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $produto->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $produto->id], ['confirm' => __('Tem certeza que quer deletar o produto {0}?', $produto->nome_produto)]) ?>
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
