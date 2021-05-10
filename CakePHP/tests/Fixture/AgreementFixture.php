<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * AgreementFixture
 */
class AgreementFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public $table = 'agreement';
    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'agreement_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'status' => ['type' => 'string', 'length' => 40, 'null' => false, 'default' => 'Not Started', 'collate' => 'utf8mb4_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        'start_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'end_date' => ['type' => 'date', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'reminder' => ['type' => 'date', 'length' => null, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null],
        'provider_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'member_id' => ['type' => 'integer', 'length' => 6, 'unsigned' => true, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'FOREIGN' => ['type' => 'index', 'columns' => ['provider_id', 'member_id'], 'length' => []],
            'member_id' => ['type' => 'index', 'columns' => ['member_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['agreement_id'], 'length' => []],
            'agreement_ibfk_1' => ['type' => 'foreign', 'columns' => ['member_id'], 'references' => ['placement_member', 'member_id'], 'update' => 'cascade', 'delete' => 'setNull', 'length' => []],
            'agreement_ibfk_2' => ['type' => 'foreign', 'columns' => ['provider_id'], 'references' => ['provider', 'provider_id'], 'update' => 'cascade', 'delete' => 'cascade', 'length' => []],
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
                'agreement_id' => 1,
                'status' => 'Lorem ipsum dolor sit amet',
                'start_date' => '2020-09-16',
                'end_date' => '2020-09-16',
                'reminder' => '2020-09-16',
                'provider_id' => 1,
                'member_id' => 1,
            ],
        ];
        parent::init();
    }
}
