<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Student extends Entity{
    protected function _setPassword($password) {
          return (new DefaultPasswordHasher)->hash($password);
    }

    protected $_accessible = [
        '*' => true,
        'id' => false
    ];
}
