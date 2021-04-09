<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingEntry Entity
 *
 * @property int $id
 * @property int $association_id
 * @property int $accounting_entry_type_id
 * @property int|null $event_id
 * @property string|null $amount
 * @property string|null $reason
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 *
 * @property \App\Model\Entity\Association $association
 * @property \App\Model\Entity\TypeOfAccountingEntry $type_of_accounting_entry
 * @property \App\Model\Entity\Event $event
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
        'accounting_entry_type_id' => true,
        'event_id' => true,
        'amount' => true,
        'reason' => true,
        'created' => true,
        'updated' => true,
        'association' => true,
        'type_of_accounting_entry' => true,
        'event' => true,
    ];
}
