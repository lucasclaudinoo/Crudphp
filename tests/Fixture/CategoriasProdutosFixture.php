<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CategoriasProdutosFixture
 */
class CategoriasProdutosFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'nome_categoria' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'descricao_categoria' => ['type' => 'string', 'length' => 220, 'null' => false, 'default' => null, 'collate' => 'utf32_unicode_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
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
                'nome_categoria' => 'Lorem ipsum dolor sit amet',
                'descricao_categoria' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
