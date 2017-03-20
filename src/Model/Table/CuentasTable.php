<?php
namespace App\Model\Table;

use App\Model\Entity\Cuenta;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Cuentas Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Tratamientos
 */
class CuentasTable extends Table
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

        $this->table('cuentas');
        $this->displayField('id');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Tratamientos', [
            'foreignKey' => 'tratamiento_id',
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

        $validator
            ->numeric('costo_total')
            ->requirePresence('costo_total', 'create')
            ->notEmpty('costo_total');

        $validator
            ->numeric('cancelado')
            ->requirePresence('cancelado', 'create')
            ->notEmpty('cancelado');

        $validator
            ->numeric('saldo_por_pagar')
            ->requirePresence('saldo_por_pagar', 'create')
            ->notEmpty('saldo_por_pagar');

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
        $rules->add($rules->existsIn(['tratamiento_id'], 'Tratamientos'));
        return $rules;
    }
}
