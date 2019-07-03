<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * OrderDetailFixture
 */
class OrderDetailFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'order_detail';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'order_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'cant' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'unit_price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        'total_price' => ['type' => 'float', 'length' => null, 'precision' => null, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => ''],
        '_indexes' => [
            'order_key' => ['type' => 'index', 'columns' => ['order_id'], 'length' => []],
            'product_key' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'order_detail_ibfk_1' => ['type' => 'foreign', 'columns' => ['order_id'], 'references' => ['orders', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'order_detail_ibfk_2' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'latin1_swedish_ci'
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
                'order_id' => 1,
                'product_id' => 1,
                'cant' => 1,
                'unit_price' => 1,
                'total_price' => 1
            ],
        ];
        parent::init();
    }
}
