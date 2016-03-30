<?php
namespace App\Model\Table;

use App\Model\Entity\Klass;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Klasses Model
 *
 */
class KlassesTable extends Table
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

        $this->table('klasses');
        $this->displayField('title');
        $this->primaryKey('id');
        
        $this->hasMany('Chapters', [
            'foreignKey' => 'klasses_id'
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
            ->requirePresence('title', 'create')
            ->notEmpty('title');

        $validator
            ->requirePresence('details', 'create')
            ->notEmpty('details');

        return $validator;
    }
}
