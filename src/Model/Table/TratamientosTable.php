<?php
namespace App\Model\Table;

use App\Model\Entity\Tratamiento;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Tratamientos Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Pacientes
 * @property \Cake\ORM\Association\HasMany $Cuentas
 */
class TratamientosTable extends Table
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

        $this->table('tratamientos');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Pacientes', [
            'foreignKey' => 'paciente_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Cuentas', [
            'foreignKey' => 'tratamiento_id'
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
            ->boolean('ortodoncia')
            ->requirePresence('ortodoncia', 'create')
            ->notEmpty('ortodoncia');

        $validator
            ->boolean('endodoncia')
            ->requirePresence('endodoncia', 'create')
            ->notEmpty('endodoncia');

        $validator
            ->boolean('periodoncia')
            ->requirePresence('periodoncia', 'create')
            ->notEmpty('periodoncia');

        $validator
            ->boolean('protesis_dental')
            ->requirePresence('protesis_dental', 'create')
            ->notEmpty('protesis_dental');

        $validator
            ->boolean('implantologia')
            ->requirePresence('implantologia', 'create')
            ->notEmpty('implantologia');

        $validator
            ->boolean('estetica_dental')
            ->requirePresence('estetica_dental', 'create')
            ->notEmpty('estetica_dental');

        $validator
            ->boolean('blanqueamiento_dental')
            ->requirePresence('blanqueamiento_dental', 'create')
            ->notEmpty('blanqueamiento_dental');

        $validator
            ->boolean('caries')
            ->requirePresence('caries', 'create')
            ->notEmpty('caries');

        $validator
            ->boolean('rehabilitacion_oral')
            ->requirePresence('rehabilitacion_oral', 'create')
            ->notEmpty('rehabilitacion_oral');

        $validator
            ->boolean('apicectomia')
            ->requirePresence('apicectomia', 'create')
            ->notEmpty('apicectomia');

        $validator
            ->boolean('quistes')
            ->requirePresence('quistes', 'create')
            ->notEmpty('quistes');

        $validator
            ->boolean('extraccion_3er_molar')
            ->requirePresence('extraccion_3er_molar', 'create')
            ->notEmpty('extraccion_3er_molar');

        $validator
            ->requirePresence('tipo_de_pago', 'create')
            ->notEmpty('tipo_de_pago');

        $validator
            ->numeric('costo_total')
            ->requirePresence('costo_total', 'create')
            ->notEmpty('costo_total');

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
        $rules->add($rules->existsIn(['paciente_id'], 'Pacientes'));
        return $rules;
    }
}
