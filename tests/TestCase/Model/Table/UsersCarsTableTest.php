<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\UsersCarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\UsersCarsTable Test Case
 */
class UsersCarsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\UsersCarsTable
     */
    public $UsersCars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.UsersCars',
        'app.Users',
        'app.Cars'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('UsersCars') ? [] : ['className' => UsersCarsTable::class];
        $this->UsersCars = TableRegistry::getTableLocator()->get('UsersCars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->UsersCars);

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
