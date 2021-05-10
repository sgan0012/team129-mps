<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * AgreementProgress Model
 *
 * @property \App\Model\Table\AgreementTable&\Cake\ORM\Association\BelongsTo $Agreement
 *
 * @method \App\Model\Entity\AgreementProgres get($primaryKey, $options = [])
 * @method \App\Model\Entity\AgreementProgres newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\AgreementProgres[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\AgreementProgres|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgreementProgres saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\AgreementProgres patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\AgreementProgres[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\AgreementProgres findOrCreate($search, callable $callback = null, $options = [])
 */
class AgreementProgressTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('agreement_progress');
        $this->setDisplayField('agreement_progress_id');
        $this->setPrimaryKey('agreement_progress_id');

        $this->belongsTo('Agreement', [
            'foreignKey' => 'agreement_id',
            'joinType' => 'INNER',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('agreement_progress_id')
            ->allowEmptyString('agreement_progress_id', null, 'create');

        $validator
            ->scalar('comments')
            ->maxLength('comments', 4500)
            ->requirePresence('comments', 'create')
            ->notEmptyString('comments');

        $validator
            ->dateTime('datetime')
            ->requirePresence('datetime', 'create')
            ->notEmptyDateTime('datetime');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['agreement_id'], 'Agreement'));

        return $rules;
    }
}
