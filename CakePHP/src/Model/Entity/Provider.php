<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Provider Entity
 *
 * @property int $provider_id
 * @property string $name
 * @property string $abn
 * @property string $city
 * @property string $suburb
 * @property string $state_territory
 * @property string $address
 * @property string $phone_num
 * @property string $email_address
 * @property string|null $placeright
 * @property string $preference
 */
class Provider extends Entity
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
        'abn' => true,
        'city' => true,
        'suburb' => true,
        'state_territory' => true,
        'address' => true,
        'phone_num' => true,
        'email_address' => true,
        'placeright' => true,
        'preference' => true,
    ];
}
