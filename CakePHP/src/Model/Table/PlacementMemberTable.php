<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PlacementMember Model
 *
 * @property \App\Model\Table\DepartmentTable&\Cake\ORM\Association\BelongsTo $Department
 *
 * @method \App\Model\Entity\PlacementMember get($primaryKey, $options = [])
 * @method \App\Model\Entity\PlacementMember newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PlacementMember[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PlacementMember|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlacementMember saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PlacementMember patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PlacementMember[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PlacementMember findOrCreate($search, callable $callback = null, $options = [])
 */
class PlacementMemberTable extends Table
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

        $this->setTable('placement_member');
        $this->setDisplayField('name');
        $this->setPrimaryKey('member_id');

        $this->belongsTo('Department', [
            'foreignKey' => 'department_id',
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
            ->nonNegativeInteger('member_id')
            ->allowEmptyString('member_id', null, 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 100)
            ->requirePresence('name', 'create')
            ->notEmptyString('name');

        $validator
            ->scalar('email_address')
            ->maxLength('email_address', 100)
            ->requirePresence('email_address', 'create')
            ->notEmptyString('email_address');

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

        return $rules;
    }
}
