<?php
namespace App\Model\Table;

use App\Model\Entity\Paciente;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Pacientes Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Users
 * @property \Cake\ORM\Association\HasMany $Historiales
 * @property \Cake\ORM\Association\HasMany $Recetas
 * @property \Cake\ORM\Association\HasMany $Tratamientos
 */
class PacientesTable extends Table
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

        $this->table('pacientes');
        $this->displayField('nombre');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Historiales', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('Recetas', [
            'foreignKey' => 'paciente_id'
        ]);
        $this->hasMany('Tratamientos', [
            'foreignKey' => 'paciente_id'
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
        ->integer('telf_o_cel')
            ->requirePresence('nombre', ['rule'=>'text'], 'create')
            ->notEmpty('nombre');

        $validator
            ->requirePresence('apellido', 'create')
            ->notEmpty('apellido');

        $validator
            ->requirePresence('sexo', 'create')
            ->notEmpty('sexo');

        $validator
            ->integer('edad')
            ->requirePresence('edad', 'create')
            ->notEmpty('edad');

        $validator
            ->requirePresence('ci', 'create')
            ->notEmpty('ci');

        $validator
            ->requirePresence('ciudad', 'create')
            ->notEmpty('ciudad');

        $validator
            ->integer('telf_o_cel')
            ->requirePresence('telf_o_cel', 'create')
            ->notEmpty('telf_o_cel');

        $validator
            ->email('email')
            ->requirePresence('email', 'create')
            ->notEmpty('email');

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
        $rules->add($rules->isUnique(['email']));
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        return $rules;
    }
}
