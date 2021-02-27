<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * StatistiquesFixture
 */
class StatistiquesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id_statistiques' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'id_association' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'id_stat_type' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'id_association' => ['type' => 'index', 'columns' => ['id_association'], 'length' => []],
            'id_stat_type' => ['type' => 'index', 'columns' => ['id_stat_type'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id_statistiques'], 'length' => []],
            'statistiques_ibfk_2' => ['type' => 'foreign', 'columns' => ['id_stat_type'], 'references' => ['stat_type', 'id_stat_type'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'statistiques_ibfk_1' => ['type' => 'foreign', 'columns' => ['id_association'], 'references' => ['associations', 'id_association'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_general_ci'
        ],
    ];
    // phpcs:enable
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id_statistiques' => 1,
                'id_association' => 1,
                'id_stat_type' => 1,
            ],
        ];
        parent::init();
    }
}
