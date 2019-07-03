<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ZonesUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ZonesUsersTable Test Case
 */
class ZonesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ZonesUsersTable
     */
    public $ZonesUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.ZonesUsers',
        'app.Zones',
        'app.Users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ZonesUsers') ? [] : ['className' => ZonesUsersTable::class];
        $this->ZonesUsers = TableRegistry::getTableLocator()->get('ZonesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ZonesUsers);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
