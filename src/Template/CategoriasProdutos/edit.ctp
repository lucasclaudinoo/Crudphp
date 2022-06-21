<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $categoriasProduto->id],
                ['confirm' => __('tem certeza que quer deletar essa categoria ?')]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de categorias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasProdutos form large-10 medium-8 columns content">
    <?= $this->Form->create($categoriasProduto) ?>
    <fieldset>
        <legend><?= __('Edit Categorias Produto') ?></legend>
        <?php
            echo $this->Form->control('nome_categoria');
            echo $this->Form->control('descricao_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
