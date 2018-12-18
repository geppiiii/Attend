<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;
class AttendsTable extends Table{
  public function initialize (array $config) {
    $this->hasOne("Students",[
      "joinType" => "INNER",
      "foreignKey" => "student_number",
      "bindingKey" => "student_number",
      "propertyName" => "student"
    ]);
  }

  public function validationDefault(Validator $validator){
        
  }
}
