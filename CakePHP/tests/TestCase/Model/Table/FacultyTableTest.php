<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\FacultyTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\FacultyTable Test Case
 */
class FacultyTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\FacultyTable
     */
    public $Faculty;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Faculty',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Faculty') ? [] : ['className' => FacultyTable::class];
        $this->Faculty = TableRegistry::getTableLocator()->get('Faculty', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Faculty);

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
