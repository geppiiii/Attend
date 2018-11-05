<?php
namespace App\Controller;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
class AttController extends AppController{
    public function initialize(){
        //$this->viewBuilder()->layout('Hello');
        //$this->set('msg','Hello/index');
        //$this->set('footer','Hello\footer2');


    }
    public function index(){
    }
    public function lessonConfirm(){
    }
    public function home(){

    }
    public function registryStudent(){

    }
    public function dailyOutput(){
        $this->attends = TableRegistry::get('attends');
        $this->students = TableRegistry::get('students');
        $att_late = $this->attends->find('all',[
            'conditions'=>[
                'all_situation =' => 2]]);
        $abs = $this->attends->find('all',[
            'conditions'=>[
                'all_situation =' => 6
            ]
        ]);
        $this->set('att_late',$att_late);
        $this->set('abs',$abs);
        $name = $this->students->find('all');
        $this->set('name',$name);

    }
}
?>
