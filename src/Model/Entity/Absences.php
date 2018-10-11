<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Absences extends Entity{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
