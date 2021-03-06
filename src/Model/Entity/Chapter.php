<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Chapter Entity.
 *
 * @property int $id
 * @property int $subject_id
 * @property \App\Model\Entity\Subject $subject
 * @property int $klasses_id
 * @property \App\Model\Entity\Klass $klass
 * @property string $title
 * @property string $details
 * @property \App\Model\Entity\QueSubch[] $que_subch
 */
class Chapter extends Entity
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
