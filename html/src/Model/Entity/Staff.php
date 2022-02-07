<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Staff Entity
 *
 * @property int $id
 * @property string $family_name
 * @property string $first_name
 * @property string $family_name_kana
 * @property string $first_name_kana
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Staff extends Entity
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
        'family_name' => true,
        'first_name' => true,
        'family_name_kana' => true,
        'first_name_kana' => true,
        'deleted_at' => true,
        'updated_at' => true,
        'created_at' => true,
        'reservations' => true,
    ];
}
