<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property \Cake\I18n\FrozenDate|null $birth_date
 * @property string|null $email
 * @property string|null $phone_number
 * @property bool|null $contribution_is_paid
 * @property int $association_id
 * @property int|null $inscription_date
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 *
 * @property \App\Model\Entity\Association $association
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
        'first_name' => true,
        'last_name' => true,
        'birth_date' => true,
        'email' => true,
        'phone_number' => true,
        'contribution_is_paid' => true,
        'association_id' => true,
        'inscription_date' => true,
        'created' => true,
        'updated' => true,
        'association' => true,
    ];
}
