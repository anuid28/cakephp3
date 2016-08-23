<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Hobbies Model
 *
 * @property \Cake\ORM\Association\HasMany $HobbyUsers
 *
 * @method \App\Model\Entity\Hobby get($primaryKey, $options = [])
 * @method \App\Model\Entity\Hobby newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Hobby[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Hobby|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Hobby patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Hobby[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Hobby findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class HobbiesTable extends Table
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

        $this->table('hobbies');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->hasMany('HobbyUsers', [
            'foreignKey' => 'hobby_id'
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('name');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
