<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * CalendarEvent Model
 *
 * @method \App\Model\Entity\CalendarEvent get($primaryKey, $options = [])
 * @method \App\Model\Entity\CalendarEvent newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\CalendarEvent[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\CalendarEvent|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CalendarEvent saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\CalendarEvent patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\CalendarEvent[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\CalendarEvent findOrCreate($search, callable $callback = null, $options = [])
 */
class CalendarEventTable extends Table
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

        $this->setTable('calendar_event');
        $this->setDisplayField('title');
        $this->setPrimaryKey('event_id');
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
            ->integer('event_id')
            ->allowEmptyString('event_id', null, 'create');

        $validator
            ->scalar('title')
            ->maxLength('title', 100)
            ->requirePresence('title', 'create')
            ->notEmptyString('title');

        $validator
            ->scalar('description')
            ->maxLength('description', 1000)
            ->requirePresence('description', 'create')
            ->notEmptyString('description');

        $validator
            ->date('start_date')
            ->requirePresence('start_date', 'create')
            ->notEmptyDate('start_date');

        $validator
            ->date('end_date')
            ->requirePresence('end_date', 'create')
            ->notEmptyDate('end_date');

        $validator
            ->date('reminder_date')
            ->requirePresence('reminder_date', 'create')
            ->notEmptyDate('reminder_date');

//        $validator
//            ->scalar('category')
//            ->maxLength('category', 60)
//            ->allowEmptyString('category');
//
//        $validator
//            ->scalar('color_label')
//            ->maxLength('color_label', 30)
//            ->requirePresence('color_label', 'create')
//            ->notEmptyString('color_label');

        $validator
            ->time('start_time')
            ->requirePresence('start_time', 'create')
            ->notEmptyTime('start_time');

        $validator
            ->time('end_time')
            ->requirePresence('end_time', 'create')
            ->notEmptyTime('end_time');

        return $validator;
    }
}
