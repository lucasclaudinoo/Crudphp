<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\FornecedoresProduto $fornecedoresProduto
 */
?>
<nav class="large-2 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ações') ?></li>
        <li><?= $this->Html->link(__('Editar fornecedor'), ['action' => 'edit', $fornecedoresProduto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar fornecedor'), ['action' => 'delete', $fornecedoresProduto->id], ['confirm' => __('Tem certeza que deseja deletar o fornecedor {0}?', $fornecedoresProduto->razao_social_fornecedor)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de fornecedores'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo fornecedor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de produtos'), ['controller' => 'Produtos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo produto'), ['controller' => 'Produtos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="fornecedoresProdutos view large-10 medium-8 columns content">
    <h3><?= h($fornecedoresProduto->razao_social_fornecedor) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Cnpj') ?></th>
            <td><?= h($fornecedoresProduto->cnpj_fornecedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Razao Social') ?></th>
            <td><?= h($fornecedoresProduto->razao_social_fornecedor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($fornecedoresProduto->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Produtos relacionados') ?></h4>
        <?php if (!empty($fornecedoresProduto->produtos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nome Produto') ?></th>
                <th scope="col"><?= __('Descricao Produto') ?></th>
                <th scope="col"><?= __('Quantidade Estoque') ?></th>
                <th scope="col"><?= __('Fornecedores Produto Id') ?></th>
                <th scope="col"><?= __('Categorias Produto Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($fornecedoresProduto->produtos as $produtos): ?>
            <tr>
                <td><?= h($produtos->id) ?></td>
                <td><?= h($produtos->nome_produto) ?></td>
                <td><?= h($produtos->descricao_produto) ?></td>
                <td><?= h($produtos->quantidade_estoque) ?></td>
                <td><?= h($produtos->fornecedores_produto_id) ?></td>
                <td><?= h($produtos->categorias_produto_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Produtos', 'action' => 'view', $produtos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Produtos', 'action' => 'edit', $produtos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Produtos', 'action' => 'delete', $produtos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $produtos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
