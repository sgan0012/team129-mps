<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PlacementMemberFixture
 */
class PlacementMemberFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'placement_member';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'member_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'name' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'email_address' => ['type' => 'string', 'length' => 100, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'department_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FOREIGN' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['member_id'], 'length' => []],
            'placement_member_ibfk_1' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['department', 'department_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
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
                'member_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'email_address' => 'Lorem ipsum dolor sit amet',
                'department_id' => 1,
            ],
        ];
        parent::init();
    }
}
