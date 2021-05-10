<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProviderTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProviderTable Test Case
 */
class ProviderTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProviderTable
     */
    public $Provider;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Provider',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Provider') ? [] : ['className' => ProviderTable::class];
        $this->Provider = TableRegistry::getTableLocator()->get('Provider', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Provider);

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
