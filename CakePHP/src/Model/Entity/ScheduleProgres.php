<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ScheduleProgres Entity
 *
 * @property int $schedule_progress_id
 * @property string $comments
 * @property \Cake\I18n\FrozenTime $datetime
 * @property int $schedule_id
 *
 * @property \App\Model\Entity\Schedule $schedule
 */
class ScheduleProgres extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'comments' => true,
        'datetime' => true,
        'schedule_id' => true,
        'schedule' => true,
    ];
}
