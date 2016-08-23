<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\HobbiesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\HobbiesTable Test Case
 */
class HobbiesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\HobbiesTable
     */
    public $Hobbies;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.hobbies',
        'app.hobby_users',
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
        $config = TableRegistry::exists('Hobbies') ? [] : ['className' => 'App\Model\Table\HobbiesTable'];
        $this->Hobbies = TableRegistry::get('Hobbies', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Hobbies);

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
}
