<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Statistic Entity
 *
 * @property int $id
 * @property int $association_id
 * @property int $statistics_type_id
 * @property string $data
 * @property \Cake\I18n\FrozenTime|null $created
 * @property \Cake\I18n\FrozenTime|null $updated
 *
 * @property \App\Model\Entity\Association $association
 * @property \App\Model\Entity\StatisticsType $statistics_type
 */
class Statistic extends Entity
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
        'statistics_type_id' => true,
        'data' => true,
        'created' => true,
        'updated' => true,
        'association' => true,
        'statistics_type' => true,
    ];
}
