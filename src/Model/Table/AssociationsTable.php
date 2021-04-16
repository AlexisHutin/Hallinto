<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Associations Model
 *
 * @property \App\Model\Table\AccountingEntriesTable&\Cake\ORM\Association\HasMany $AccountingEntries
 * @property \App\Model\Table\MembersTable&\Cake\ORM\Association\HasMany $Members
 * @property \App\Model\Table\StatisticsTable&\Cake\ORM\Association\HasMany $Statistics
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\HasMany $Users
 * @property \App\Model\Table\EventsTable&\Cake\ORM\Association\BelongsToMany $Events
 *
 * @method \App\Model\Entity\Association newEmptyEntity()
 * @method \App\Model\Entity\Association newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Association[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Association get($primaryKey, $options = [])
 * @method \App\Model\Entity\Association findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Association patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Association[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Association|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Association saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Association[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Association[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Association[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Association[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssociationsTable extends Table
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

        $this->setTable('associations');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('AccountingEntries', [
            'foreignKey' => 'association_id',
        ]);
        $this->hasMany('Members', [
            'foreignKey' => 'association_id',
        ]);
        $this->hasMany('Statistics', [
            'foreignKey' => 'association_id',
        ]);
        $this->hasMany('Users', [
            'foreignKey' => 'association_id',
        ]);
        $this->belongsToMany('Events', [
            'foreignKey' => 'association_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'associations_events',
        ]);
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('association_type')
            ->maxLength('association_type', 255)
            ->requirePresence('association_type', 'create')
            ->notEmptyString('association_type');

        $validator
            ->scalar('adresse')
            ->requirePresence('adresse', 'create')
            ->notEmptyString('adresse');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmptyString('email');

        $validator
            ->scalar('RNA_number')
            ->maxLength('RNA_number', 255)
            ->requirePresence('RNA_number', 'create')
            ->notEmptyString('RNA_number');

        $validator
            ->scalar('plan_type')
            ->maxLength('plan_type', 255)
            ->allowEmptyString('plan_type');

        $validator
            ->scalar('image_name')
            ->maxLength('image_name', 255)
            ->allowEmptyFile('image_name');

        $validator
            ->scalar('image_path')
            ->maxLength('image_path', 255)
            ->allowEmptyFile('image_path');

        return $validator;
    }
}
