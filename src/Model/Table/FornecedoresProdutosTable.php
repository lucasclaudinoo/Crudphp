<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * FornecedoresProdutos Model
 *
 * @property \App\Model\Table\ProdutosTable&\Cake\ORM\Association\HasMany $Produtos
 *
 * @method \App\Model\Entity\FornecedoresProduto get($primaryKey, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\FornecedoresProduto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\FornecedoresProduto findOrCreate($search, callable $callback = null, $options = [])
 */
class FornecedoresProdutosTable extends Table
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

        $this->setTable('fornecedores_produtos');
        $this->setDisplayField('razao_social_fornecedor');
        $this->setPrimaryKey('id');

        $this->hasMany('Produtos', [
            'foreignKey' => 'fornecedores_produto_id',
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
            ->scalar('cnpj_fornecedor')
            ->maxLength('cnpj_fornecedor', 220)
            ->requirePresence('cnpj_fornecedor', 'create')
            ->notEmptyString('cnpj_fornecedor');

        $validator
            ->scalar('razao_social_fornecedor')
            ->maxLength('razao_social_fornecedor', 220)
            ->requirePresence('razao_social_fornecedor', 'create')
            ->notEmptyString('razao_social_fornecedor');

        return $validator;
    }
}
