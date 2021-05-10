<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * CalendarEvent Entity
 *
 * @property int $event_id
 * @property string $title
 * @property string $description
 * @property \Cake\I18n\FrozenDate $start_date
 * @property \Cake\I18n\FrozenDate $end_date
 * @property \Cake\I18n\FrozenDate $reminder_date
 * @property string|null $category
 * @property string $color_label
 * @property \Cake\I18n\FrozenTime $start_time
 * @property \Cake\I18n\FrozenTime $end_time
 */
class CalendarEvent extends Entity
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
        'title' => true,
        'description' => true,
        'start_date' => true,
        'end_date' => true,
        'reminder_date' => true,
        'category' => true,
        'color_label' => true,
        'start_time' => true,
        'end_time' => true,
    ];
}
