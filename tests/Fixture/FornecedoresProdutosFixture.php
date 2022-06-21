<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * FornecedoresProdutosFixture
 */
class FornecedoresProdutosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'cnpj_fornecedor' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'razao_social_fornecedor' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf32_unicode_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd
    /**
     * Init method
     *
     * @return void
     */
    public function init()
    {
        $this->records = [
            [
                'id' => 1,
                'cnpj_fornecedor' => 'Lorem ipsum dolor sit amet',
                'razao_social_fornecedor' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
