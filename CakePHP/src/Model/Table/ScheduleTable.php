<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Schedule Model
 *
 * @property \App\Model\Table\DepartmentTable&\Cake\ORM\Association\BelongsTo $Department
 * @property \App\Model\Table\PlacementMemberTable&\Cake\ORM\Association\BelongsTo $PlacementMember
 * @property \App\Model\Table\ProviderTable&\Cake\ORM\Association\BelongsTo $Provider
 *
 * @method \App\Model\Entity\Schedule get($primaryKey, $options = [])
 * @method \App\Model\Entity\Schedule newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Schedule[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Schedule|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Schedule patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Schedule findOrCreate($search, callable $callback = null, $options = [])
 */
class ScheduleTable extends Table
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

        $this->setTable('schedule');
        $this->setDisplayField('schedule_id');
        $this->setPrimaryKey('schedule_id');

        $this->belongsTo('Department', [
            'foreignKey' => 'department_id',
        ]);
        $this->belongsTo('PlacementMember', [
            'foreignKey' => 'member_id',
        ]);
        $this->belongsTo('Provider', [
            'foreignKey' => 'provider_id',
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
            ->nonNegativeInteger('schedule_id')
            ->allowEmptyString('schedule_id', null, 'create');

        $validator
            ->scalar('status')
            ->maxLength('status', 40)
            ->requirePresence('status', 'create')
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
        $rules->add($rules->existsIn(['department_id'], 'Department'));
        $rules->add($rules->existsIn(['member_id'], 'PlacementMember'));
        $rules->add($rules->existsIn(['provider_id'], 'Provider'));

        return $rules;
    }
}
