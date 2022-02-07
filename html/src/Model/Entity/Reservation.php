<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Reservation Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime|null $reserved_at
 * @property int $staff_id
 * @property int $service_id
 * @property int $status
 * @property \Cake\I18n\FrozenTime|null $deleted_at
 * @property \Cake\I18n\FrozenTime $updated_at
 * @property \Cake\I18n\FrozenTime $created_at
 *
 * @property \App\Model\Entity\Staff $staff
 * @property \App\Model\Entity\Service $service
 */
class Reservation extends Entity
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
        'reserved_at' => true,
        'staff_id' => true,
        'service_id' => true,
        'status' => true,
        'deleted_at' => true,
        'updated_at' => true,
        'created_at' => true,
        'staff' => true,
        'service' => true,
    ];
}
