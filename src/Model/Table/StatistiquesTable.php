<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Statistiques Model
 *
 * @method \App\Model\Entity\Statistique newEmptyEntity()
 * @method \App\Model\Entity\Statistique newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Statistique[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Statistique get($primaryKey, $options = [])
 * @method \App\Model\Entity\Statistique findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Statistique patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Statistique[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Statistique|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statistique saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Statistique[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Statistique[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Statistique[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Statistique[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class StatistiquesTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('statistiques');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id_statistiques')
            ->allowEmptyString('id_statistiques', null, 'create');

        $validator
            ->integer('id_association')
            ->requirePresence('id_association', 'create')
            ->notEmptyString('id_association');

        $validator
            ->integer('id_stat_type')
            ->requirePresence('id_stat_type', 'create')
            ->notEmptyString('id_stat_type');

        return $validator;
    }
}
