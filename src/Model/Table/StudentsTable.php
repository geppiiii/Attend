<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class StudentsTable extends Table
{
    public function initialize (array $config) {
        $this->hasOne("Attends");
    }

    public function validationDefault(Validator $validator){
        
    }

}