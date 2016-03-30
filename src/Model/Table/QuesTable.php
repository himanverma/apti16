<?php
namespace App\Model\Table;

use App\Model\Entity\Que;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Ques Model
 *
 */
class QuesTable extends Table
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

        $this->table('ques');
        $this->displayField('id');
        $this->primaryKey('id');
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
            ->requirePresence('ques', 'create')
            ->notEmpty('ques');

        $validator
            ->requirePresence('opa', 'create')
            ->notEmpty('opa');

        $validator
            ->requirePresence('opb', 'create')
            ->notEmpty('opb');

        $validator
            ->requirePresence('opc', 'create')
            ->notEmpty('opc');

        $validator
            ->requirePresence('opd', 'create')
            ->notEmpty('opd');

        $validator
            ->requirePresence('exp', 'create')
            ->notEmpty('exp');

        $validator
            ->requirePresence('marks', 'create')
            ->notEmpty('marks');

        $validator
            ->requirePresence('correct', 'create')
            ->notEmpty('correct');

        return $validator;
    }
}
