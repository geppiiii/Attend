<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Attend extends Entity{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
