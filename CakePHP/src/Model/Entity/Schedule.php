<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Schedule Entity
 *
 * @property int $schedule_id
 * @property string $status
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenDate|null $reminder
 * @property int|null $department_id
 * @property int|null $member_id
 * @property int|null $provider_id
 *
 * @property \App\Model\Entity\Department $department
 * @property \App\Model\Entity\PlacementMember $placement_member
 * @property \App\Model\Entity\Provider $provider
 */
class Schedule extends Entity
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
        'status' => true,
        'start_date' => true,
        'end_date' => true,
        'reminder' => true,
        'department_id' => true,
        'member_id' => true,
        'provider_id' => true,
        'department' => true,
        'placement_member' => true,
        'provider' => true,
        'comment' => true,
    ];
}
