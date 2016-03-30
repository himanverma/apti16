<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * QueSubch Entity.
 *
 * @property int $id
 * @property int $subchapter_id
 * @property \App\Model\Entity\Subchapter $subchapter
 * @property int $ques_id
 * @property \App\Model\Entity\Que $que
 * @property int $chapter_id
 * @property \App\Model\Entity\Chapter $chapter
 */
class QueSubch extends Entity
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
