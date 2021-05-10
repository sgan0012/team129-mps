<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


/**
 * Agreement Model
 *
 * @property \App\Model\Table\ProviderTable&\Cake\ORM\Association\BelongsTo $Provider
 * @property \App\Model\Table\PlacementMemberTable&\Cake\ORM\Association\BelongsTo $PlacementMember
 *
 * @method \App\Model\Entity\Agreement get($primaryKey, $options = [])
 * @method \App\Model\Entity\Agreement newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Agreement[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Agreement|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agreement saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Agreement patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Agreement[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Agreement findOrCreate($search, callable $callback = null, $options = [])
 */
class AgreementTable extends Table
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

        $this->setTable('agreement');
        $this->setDisplayField('agreement_id');
        $this->setPrimaryKey('agreement_id');

        $this->belongsTo('Provider', [
            'foreignKey' => 'provider_id',
        ]);
        $this->belongsTo('PlacementMember', [
            'foreignKey' => 'member_id',
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
            ->nonNegativeInteger('agreement_id')
            ->allowEmptyString('agreement_id', null, 'create');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->notEmptyString('status');

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmptyDate('end_date');

        $validator
            ->date('reminder')
            ->allowEmptyDate('reminder');

        $validator
            ->allowEmptyString('comment',null);

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
        $rules->add($rules->existsIn(['provider_id'], 'Provider'));
        $rules->add($rules->existsIn(['member_id'], 'PlacementMember'));

        return $rules;
    }
}
