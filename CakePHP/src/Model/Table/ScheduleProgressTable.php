<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ScheduleProgress Model
 *
 * @property \App\Model\Table\ScheduleTable&\Cake\ORM\Association\BelongsTo $Schedule
 *
 * @method \App\Model\Entity\ScheduleProgres get($primaryKey, $options = [])
 * @method \App\Model\Entity\ScheduleProgres newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ScheduleProgres[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ScheduleProgres|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScheduleProgres saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ScheduleProgres patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ScheduleProgres[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ScheduleProgres findOrCreate($search, callable $callback = null, $options = [])
 */
class ScheduleProgressTable extends Table
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

        $this->setTable('schedule_progress');
        $this->setDisplayField('schedule_progress_id');
        $this->setPrimaryKey('schedule_progress_id');

        $this->belongsTo('Schedule', [
            'foreignKey' => 'schedule_id',
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
            ->integer('schedule_progress_id')
            ->allowEmptyString('schedule_progress_id', null, 'create');

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
        $rules->add($rules->existsIn(['schedule_id'], 'Schedule'));

        return $rules;
    }
}
