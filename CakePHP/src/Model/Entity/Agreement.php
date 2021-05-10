<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Agreement Entity
 *
 * @property int $agreement_id
 * @property string $status
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenDate|null $reminder
 * @property int|null $provider_id
 * @property int|null $member_id
 *
 * @property \App\Model\Entity\Provider $provider
 * @property \App\Model\Entity\PlacementMember $placement_member
 */
class Agreement extends Entity
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
        'provider_id' => true,
        'member_id' => true,
        'provider' => true,
        'placement_member' => true,
        'comment' => true,
    ];
}
