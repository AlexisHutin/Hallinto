<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Association Entity
 *
 * @property int $id
 * @property string $name
 * @property string $association_type
 * @property string $adresse
 * @property string $email
 * @property string $RNA_number
 * @property string|null $plan_type
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 * @property string|null $image_name
 * @property string|null $image_path
 *
 * @property \App\Model\Entity\AccountingEntry[] $accounting_entries
 * @property \App\Model\Entity\Member[] $members
 * @property \App\Model\Entity\Statistic[] $statistics
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Event[] $events
 */
class Association extends Entity
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
        'association_type' => true,
        'adresse' => true,
        'email' => true,
        'RNA_number' => true,
        'plan_type' => true,
        'created' => true,
        'updated' => true,
        'image_name' => true,
        'image_path' => true,
        'accounting_entries' => true,
        'members' => true,
        'statistics' => true,
        'users' => true,
        'events' => true,
    ];
}
