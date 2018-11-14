<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

class Student_Lesson extends Entity{
    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
