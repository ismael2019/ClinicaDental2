<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Tratamiento Entity.
 *
 * @property int $id
 * @property int $paciente_id
 * @property \App\Model\Entity\Paciente $paciente
 * @property bool $ortodoncia
 * @property bool $endodoncia
 * @property bool $periodoncia
 * @property bool $protesis_dental
 * @property bool $implantologia
 * @property bool $estetica_dental
 * @property bool $blanqueamiento_dental
 * @property bool $caries
 * @property bool $rehabilitacion_oral
 * @property bool $apicectomia
 * @property bool $quistes
 * @property bool $extraccion_3er_molar
 * @property string $tipo_de_pago
 * @property float $costo_total
 * @property \Cake\I18n\Time $created
 * @property \Cake\I18n\Time $modified
 * @property \App\Model\Entity\Cuenta[] $cuentas
 */
class Tratamiento extends Entity
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
