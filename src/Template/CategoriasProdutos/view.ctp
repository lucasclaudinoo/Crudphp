<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Categoria'), ['action' => 'edit', $categoriasProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Categoria'), ['action' => 'delete', $categoriasProduto->id], ['confirm' => __('Tem certeza que quer deletar?', $categoriasProduto->nome_categoria)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Categorias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Categoria'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="categoriasProdutos view large-10 medium-8 columns content">
    <h3><?= h($categoriasProduto->nome_categoria) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome Categoria') ?></th>
            <td><?= h($categoriasProduto->nome_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descricao Categoria') ?></th>
            <td><?= h($categoriasProduto->descricao_categoria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($categoriasProduto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Produtos relecionados') ?></h4>
        <?php if (!empty($categoriasProduto->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Produto') ?></th>
                <th scope="col"><?= __('Descricao Produto') ?></th>
                <th scope="col"><?= __('Quantidade Estoque') ?></th>

                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($categoriasProduto->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome_produto) ?></td>
                <td><?= h($produtos->descricao_produto) ?></td>
                <td><?= h($produtos->quantidade_estoque) ?></td>

                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('tem certeza que quer deltar esse produto ?')]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
