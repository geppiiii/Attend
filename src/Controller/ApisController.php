<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Dispatcher;
use cake\ORM\TableRegistry;

class ApisController extends AppController {
    
    public function initialize () {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        
        $this->response->charset('UTF-8');
        $this->response->type('application/json');
        $this->response->type('json');
    }

    public function index () {
        $this->autoRender = false;
        $data = ["NORMAL_REQUEST_CODE" => "200"];
        $this->response->body(json_encode($data));
        //$this->response->body(json_encode($data));
    }


    public function attends_HR(){
        $this->autoRender = false;
        $data = ["BAD_REQUEST_CODE" => '404'];
        $attendsTable = TableRegistry::get('attends');
        $studentsTable = TableRegistry::get('students');

        if($this->request->is('post')){
            $number = $articles->get('ic_number');
            $break = $articles->get('break');
            $student_est = $studentsTable->get($number);
            try{
                $attends_est = $attendsTable->get($student_est->student_number);
            } catch(\Exception $e) {
                $attends_est = null;
            }

            if($break == true && !empty($attends_est)){ 
                //現在時刻に適応した時刻をいれる。
                $attends_est->leave_time = date("H/i/s");
                //帰宅情報を入れる。
                
                //if文で、条件文をかいて、早退処理をかく
                if($attends_est->attend_state = 6 && $attends_est->leave_state = 1){
                    $attends_est->all_situation = 2;//遅刻
                } else {
                    $attends_est->all_situation = $attends_est->leave_state;//正常
                }
                
                $data = ["GOOD_REQUEST_CODE" => '200'];
            }else{
                //朝
                //出席情報を入れる。
                $attends_est = array(
                    'student_number' => h($student_est->student_number),
                    'attend_time' => h(date("H/i/s"))
                );
                $attendsTable = $attends->newEntity($this->request->getData());
                if ($attends->save($attendsTable)) {
                    $data = ["GOOD_REQUEST_CODE" => '200'];
                }
            }     
           
        }
        $this->response->body(json_encode($data));
    }

}