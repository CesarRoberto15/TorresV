<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ZonesFixture
 */
class ZonesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'latin1_swedish_ci', 'comment' => 'Nombre de la zona donde hay un o varios repartidores', 'precision' => null, 'fixed' => null],
        'status' => ['type' => 'boolean', 'length' => null, 'null' => false, 'default' => '1', 'comment' => 'Si la zona esta habilitada para poder tener repartidores.', 'precision' => null],
        'quantity_dealers' => ['type' => 'integer', 'length' => 3, 'unsigned' => false, 'null' => false, 'default' => '0', 'comment' => 'En cada zona solo puede haber 3 repartidores aquí es donde se mide la cantidad de repartidores por zona.', 'precision' => null, 'autoIncrement' => null],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'status' => 1,
                'quantity_dealers' => 1
            ],
        ];
        parent::init();
    }
}
