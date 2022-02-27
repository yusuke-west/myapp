<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $family_name
 * @property string $first_name
 * @property string $family_name_kana
 * @property string $first_name_kana
 * @property string $email
 * @property string $tel
 */
class Member extends Entity
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
        'email' => true,
        'tel' => true,
    ];
}
