<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar Produto'), ['action' => 'edit', $produto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Produto'), ['action' => 'delete', $produto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produto->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista Produtos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Produto'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Fornecedores'), ['controller' => 'FornecedoresProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Fornecedores Produto'), ['controller' => 'FornecedoresProdutos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Categorias'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Adicionar Categorias'), ['controller' => 'CategoriasProdutos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="produtos view large-10 medium-8 columns content">
    <h3><?= h($produto->nome_produto) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome produto') ?></th>
            <td><?= h($produto->nome_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Descrição produto') ?></th>
            <td><?= h($produto->descricao_produto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fornecedor') ?></th>
            <td><?= $produto->has('fornecedores_produto') ? $this->Html->link($produto->fornecedores_produto->razao_social_fornecedor, ['controller' => 'FornecedoresProdutos', 'action' => 'view', $produto->fornecedores_produto->razao_social_fornecedor]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Categoria') ?></th>
            <td><?= $produto->has('categorias_produto') ? $this->Html->link($produto->categorias_produto->nome_categoria, ['controller' => 'CategoriasProdutos', 'action' => 'view', $produto->categorias_produto->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($produto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantidade em estoque') ?></th>
            <td><?= $this->Number->format($produto->quantidade_estoque) ?></td>
        </tr>
    </table>
</div>
