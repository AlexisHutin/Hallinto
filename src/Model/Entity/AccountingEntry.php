<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingEntry Entity
 *
 * @property int $id
 * @property int $association_id
 * @property int $type_of_accounting_entry_id
 * @property int|null $event_id
 * @property string|null $amount
 * @property \Cake\I18n\FrozenDate|null $created_on
 * @property \Cake\I18n\FrozenDate|null $updated_on
 */
class AccountingEntry extends Entity
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
        'association_id' => true,
        'type_of_accounting_entry_id' => true,
        'event_id' => true,
        'amount' => true,
        'created_on' => true,
        'updated_on' => true,
    ];
}
