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


    public function add(){
        $request_code = "BAD_REQUEST_CODE";
        $request_number = '404';
        $student_id = null;
        $this->autoRender = false;
        $data = [$request_code => $request_number];
        $attendsTable = TableRegistry::get('attends');
        $studentsTable = TableRegistry::get('students');

        if($this->request->is('post')){
            $request_code = "NORMAL_REQUEST_CODE";
            $request = json_decode(file_get_contents('php://input'), true);
            $ic_number = $request['id'];
            $students_result = $studentsTable->find()->select(['student_number'])->where(['ic_number'=>$ic_number]);
            foreach ($students_result as $result) {
                $student_id = $result->student_number;
            }
            $request_number = $student_id;
            $data = [$request_code => $request_number];
        }
        $this->response->body(json_encode($data));
    }

}