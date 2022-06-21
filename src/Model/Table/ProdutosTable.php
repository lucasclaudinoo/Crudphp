<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Produtos Model
 *
 * @property \App\Model\Table\FornecedoresProdutosTable&\Cake\ORM\Association\BelongsTo $FornecedoresProdutos
 * @property \App\Model\Table\CategoriasProdutosTable&\Cake\ORM\Association\BelongsTo $CategoriasProdutos
 *
 * @method \App\Model\Entity\Produto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Produto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Produto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Produto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Produto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Produto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Produto findOrCreate($search, callable $callback = null, $options = [])
 */
class ProdutosTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('produtos');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('FornecedoresProdutos', [
            'foreignKey' => 'fornecedores_produto_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('CategoriasProdutos', [
            'foreignKey' => 'categorias_produto_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_produto')
            ->maxLength('nome_produto', 220)
            ->requirePresence('nome_produto', 'create')
            ->notEmptyString('nome_produto');

        $validator
            ->scalar('descricao_produto')
            ->maxLength('descricao_produto', 220)
            ->requirePresence('descricao_produto', 'create')
            ->notEmptyString('descricao_produto');

        $validator
            ->integer('quantidade_estoque')
            ->requirePresence('quantidade_estoque', 'create')
            ->notEmptyString('quantidade_estoque');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['fornecedores_produto_id'], 'FornecedoresProdutos'));
        $rules->add($rules->existsIn(['categorias_produto_id'], 'CategoriasProdutos'));

        return $rules;
    }
}
