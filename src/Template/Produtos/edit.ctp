<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Produto $produto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $produto->id],
                ['confirm' => __('você tem certeza que quer deltar  {0}?', $produto->nome_produto)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Produtos'), ['action' => 'index']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Lista de fornecedores'), ['controller' => 'FornecedoresProdutos', 'action' => 'index']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Novo fornecedor'), ['controller' => 'FornecedoresProdutos', 'action' => 'add']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Lista de categorias'), ['controller' => 'CategoriasProdutos', 'action' => 'index']) ?></li>
        <li class="barra-lateral"><?= $this->Html->link(__('Nova categoria'), ['controller' => 'CategoriasProdutos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="produtos form large-10 medium-8 columns content">
    <?= $this->Form->create($produto) ?>
    <fieldset>
        <legend><?= __('Editar Produto') ?></legend>
        <?php
            echo $this->Form->control('nome_produto');
            echo $this->Form->control('descricao_produto');
            echo $this->Form->control('quantidade_estoque');
            echo $this->Form->control('fornecedores_produto_id', ['options' => $fornecedoresProdutos]);
            echo $this->Form->control('categorias_produto_id', ['options' => $categoriasProdutos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
