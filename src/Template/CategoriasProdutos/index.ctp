<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto[]|\Cake\Collection\CollectionInterface $categoriasProdutos
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Nova categoria'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasProdutos index large-10 medium-8 columns content">
    <h2><?= __('Categorias Produtos') ?></h2>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome_categoria') ?></th>
                <th scope="col"><?= $this->Paginator->sort('descricao_categoria') ?></th>
                <th scope="col" class="actions"><?= __('Ações') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($categoriasProdutos as $categoriasProduto): ?>
            <tr>
                <td><?= $this->Number->format($categoriasProduto->id) ?></td>
                <td><?= h($categoriasProduto->nome_categoria) ?></td>
                <td><?= h($categoriasProduto->descricao_categoria) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $categoriasProduto->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $categoriasProduto->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Tem certeza que quer deletar essa categoria?', $categoriasProduto->nome_categoria)]) ?>
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
