<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Cuenta Entity.
 *
 * @property int $id
 * @property int $tratamiento_id
 * @property \App\Model\Entity\Tratamiento $tratamiento
 * @property float $costo_total
 * @property float $cancelado
 * @property float $saldo_por_pagar
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 */
class Cuenta extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        '*' => true,
        'id' => false,
    ];
}
