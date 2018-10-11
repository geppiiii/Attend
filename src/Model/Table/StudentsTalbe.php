<?php
namespace App\Model\Table;

use Cake\ORM\RulesChecker;
use Cake\ORM\Query;
use Cake\ORM\Table;

class StudentsTable extends Table{

  public  function  initialize(array $config) { 

    $this->belongsTo('Absences')
         ->setForeignKey('student_number');
  }

}
