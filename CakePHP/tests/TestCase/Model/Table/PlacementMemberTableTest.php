<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PlacementMemberTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PlacementMemberTable Test Case
 */
class PlacementMemberTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PlacementMemberTable
     */
    public $PlacementMember;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.PlacementMember',
        'app.Department',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('PlacementMember') ? [] : ['className' => PlacementMemberTable::class];
        $this->PlacementMember = TableRegistry::getTableLocator()->get('PlacementMember', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->PlacementMember);

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
