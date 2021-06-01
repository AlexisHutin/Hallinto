<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AccountingEntryType Model
 *
 * @property \App\Model\Table\AccountingEntriesTable&\Cake\ORM\Association\HasMany $AccountingEntries
 *
 * @method \App\Model\Entity\AccountingEntryType newEmptyEntity()
 * @method \App\Model\Entity\AccountingEntryType newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingEntryType[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AccountingEntryType get($primaryKey, $options = [])
 * @method \App\Model\Entity\AccountingEntryType findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\AccountingEntryType patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingEntryType[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\AccountingEntryType|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountingEntryType saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AccountingEntryType[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingEntryType[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingEntryType[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\AccountingEntryType[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class AccountingEntryTypeTable extends Table
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

        $this->setTable('accounting_entry_type');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->hasMany('AccountingEntries', [
            'foreignKey' => 'accounting_entry_type_id',
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
            ->scalar('type_name')
            ->maxLength('type_name', 255)
            ->allowEmptyString('type_name');

        return $validator;
    }
}
