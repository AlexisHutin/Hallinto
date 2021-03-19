<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * AccountingEntry Entity
 *
 * @property int $id_accounting_entries
 * @property string|null $amount
 * @property \Cake\I18n\FrozenTime|null $created
 * @property int $id
 * @property int $id_association
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
        'amount' => true,
        'created' => true,
        'id' => true,
        'id_association' => true,
    ];
}
