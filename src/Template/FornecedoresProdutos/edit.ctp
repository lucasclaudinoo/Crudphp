<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FornecedoresProduto $fornecedoresProduto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $fornecedoresProduto->id],
                ['confirm' => __('Tem certeza que quer deletar {0}?', $fornecedoresProduto->razao_social_fornecedor)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de fornecedores'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Produtos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="fornecedoresProdutos form large-10 medium-8 columns content">
    <?= $this->Form->create($fornecedoresProduto) ?>
    <fieldset>
        <legend><?= __('Editar fornecedores') ?></legend>
        <?php
            echo $this->Form->control('cnpj_fornecedor');
            echo $this->Form->control('razao_social_fornecedor');
        ?>
    </fieldset>
    <?= $this->Form->button(__('confirmar')) ?>
    <?= $this->Form->end() ?>
</div>
