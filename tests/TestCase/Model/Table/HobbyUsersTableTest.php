<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HobbyUsersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HobbyUsersTable Test Case
 */
class HobbyUsersTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HobbyUsersTable
     */
    public $HobbyUsers;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hobby_users',
        'app.hobbies',
        'app.users',
        'app.countries'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('HobbyUsers') ? [] : ['className' => 'App\Model\Table\HobbyUsersTable'];
        $this->HobbyUsers = TableRegistry::get('HobbyUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->HobbyUsers);

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
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
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
