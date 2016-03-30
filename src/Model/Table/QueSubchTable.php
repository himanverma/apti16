<?php
namespace App\Model\Table;

use App\Model\Entity\QueSubch;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * QueSubch Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Subchapters
 * @property \Cake\ORM\Association\BelongsTo $Ques
 * @property \Cake\ORM\Association\BelongsTo $Chapters
 */
class QueSubchTable extends Table
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

        $this->table('que_subch');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->belongsTo('Subchapters', [
            'foreignKey' => 'subchapter_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Ques', [
            'foreignKey' => 'ques_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Chapters', [
            'foreignKey' => 'chapter_id',
            'joinType' => 'INNER'
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
        $rules->add($rules->existsIn(['subchapter_id'], 'Subchapters'));
        $rules->add($rules->existsIn(['ques_id'], 'Ques'));
        $rules->add($rules->existsIn(['chapter_id'], 'Chapters'));
        return $rules;
    }
}
