<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AgreementProgres Entity
 *
 * @property int $agreement_progress_id
 * @property string $comments
 * @property \Cake\I18n\FrozenTime $datetime
 * @property int $agreement_id
 *
 * @property \App\Model\Entity\Agreement $agreement
 */
class AgreementProgres extends Entity
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
        'agreement_id' => true,
        'agreement' => true,
    ];
}
