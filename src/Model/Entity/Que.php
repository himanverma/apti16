<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Que Entity.
 *
 * @property int $id
 * @property string $ques
 * @property string $opa
 * @property string $opb
 * @property string $opc
 * @property string $opd
 * @property string $exp
 * @property string $marks
 * @property string $correct
 */
class Que extends Entity
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
