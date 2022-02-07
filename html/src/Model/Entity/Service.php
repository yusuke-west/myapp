<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Service Entity
 *
 * @property int $id
 * @property string $title
 * @property int $time
 * @property string $price
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Service extends Entity
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
        'time' => true,
        'price' => true,
        'deleted_at' => true,
        'updated_at' => true,
        'created_at' => true,
        'reservations' => true,
    ];
}
