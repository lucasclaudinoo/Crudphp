<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\CategoriasProduto $categoriasProduto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Lista de categoria'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="categoriasProdutos form large-9 medium-8 columns content">
    <?= $this->Form->create($categoriasProduto) ?>
    <fieldset>
        <legend><?= __('Adicionar Categoria') ?></legend>
        <?php
            echo $this->Form->control('nome_categoria');
            echo $this->Form->control('descricao_categoria');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
