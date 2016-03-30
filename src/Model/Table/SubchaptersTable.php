<?php
namespace App\Model\Table;

use App\Model\Entity\Subchapter;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Subchapters Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Chapters
 * @property \Cake\ORM\Association\HasMany $QueSubch
 */
class SubchaptersTable extends Table
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

        $this->table('subchapters');
        $this->displayField('title');
        $this->primaryKey('id');

        $this->belongsTo('Chapters', [
            'foreignKey' => 'chapters_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('QueSubch', [
            'foreignKey' => 'subchapter_id'
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

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['chapters_id'], 'Chapters'));
        return $rules;
    }
}
