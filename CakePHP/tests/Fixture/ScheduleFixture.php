<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ScheduleFixture
 */
class ScheduleFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'schedule';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'schedule_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'status' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reminder' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'department_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'member_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'provider_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FOREIGN' => ['type' => 'index', 'columns' => ['department_id', 'member_id', 'provider_id'], 'length' => []],
            'member_id' => ['type' => 'index', 'columns' => ['member_id'], 'length' => []],
            'provider_id' => ['type' => 'index', 'columns' => ['provider_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['schedule_id'], 'length' => []],
            'schedule_ibfk_1' => ['type' => 'foreign', 'columns' => ['member_id'], 'references' => ['placement_member', 'member_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'schedule_ibfk_2' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['department', 'department_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'schedule_ibfk_3' => ['type' => 'foreign', 'columns' => ['provider_id'], 'references' => ['provider', 'provider_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'schedule_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2020-09-16',
                'end_date' => '2020-09-16',
                'reminder' => '2020-09-16',
                'department_id' => 1,
                'member_id' => 1,
                'provider_id' => 1,
            ],
        ];
        parent::init();
    }
}
