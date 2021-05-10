<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AgreementTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AgreementTable Test Case
 */
class AgreementTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\AgreementTable
     */
    public $Agreement;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Agreement',
        'app.Provider',
        'app.PlacementMember',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Agreement') ? [] : ['className' => AgreementTable::class];
        $this->Agreement = TableRegistry::getTableLocator()->get('Agreement', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Agreement);

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
