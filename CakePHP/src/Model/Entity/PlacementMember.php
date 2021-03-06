<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PlacementMember Entity
 *
 * @property int $member_id
 * @property string $name
 * @property string $email_address
 * @property int|null $department_id
 *
 * @property \App\Model\Entity\Department $department
 */
class PlacementMember extends Entity
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
        'name' => true,
        'email_address' => true,
        'department_id' => true,
        'department' => true,
    ];
}
