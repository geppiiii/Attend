<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Dispatcher;
use cake\ORM\TableRegistry;

class ApisController extends AppController {
    
    public function initialize () {
        parent::initialize();
        $this->Auth->allow(['add','student_add']);
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

    public function teacherCheck() {
        $this->autoRender = false;
        $teacher;
        $data = ["BAD_REQUEST_CODE" => "404"];
        $teachersTable = TableRegistry::get('Teachers');
        if ($this->request->is('post')) {
            $request = json_decode(file_get_contents('php://input'), true);
            try {
                $teacherResult = $teachersTable->find()->where(['ic_number' => $request['ic_number']]);
                foreach ($teacherResult as $obj) {
                    $teacher_id = $obj->id;
                }
                if($teachersTable->get($teacher_id)) {
                    $data = ["NORMAL_REQUEST_CODE" => '200'];
                }
            } catch (Exception $e) {
                $data = ["BAD_REQUEST_CODE" => "404"];
            }
        }
        $this->response->body(json_encode($data));
    }

    public function teacherAdd() {
        $this->autoRender = false;
        $data = ["BAD_REQUEST_CODE" => "404"];
        $teachersTable = TableRegistry::get('Teachers');
        if ($this->request->is('post')) {
            try {
                $request = json_decode(file_get_contents('php://input'), true);
                $teacher = $teachersTable->newEntity();
                $teacher->username = $request['username'];
                $teacher->ic_number = $request['ic_number'];
                $teachersTable->save($teacher);
                $data = ["NORMAL_REQUEST_CODE" => "200"];
            } catch (Exception $e) {
                $data = ["BAD_REQUEST_CODE" => "404"];
            }
        }
        $this->response->body(json_encode($data));
    }

    public function studentAdd () {
        $this->autoRender = false;
        $studentsTable = TableRegistry::get('Students');
        if ($this->request->is('post')) {
            try {
                $request = json_decode(file_get_contents('php://input'), true);
                $student = $studentsTable->newEntity();
                $student->student_number = $request['student_number'];
                $student->ic_number = $request['ic_number'];

                // $student->student_number = $request['student_number'];
                // $studetn->ic_number = $request['ic_number'];
                $studentsTable->save($student);
                $data = ["NORMAL_REQUEST_CODE" => "200"];
            } catch ( Exception $e ) {
                $data = ["BAD_REQUEST_CODE" => "404"];
            }
        }
        $this->response->body(json_encode($data));
    }


    public function add(){
        $this->autoRender = false;
        $request_code = "BAD_REQUEST_CODE";
        $request_number = '404';
        $student_id = null;
        $atte_id = null;
        $today = date("Y-m-d");
        $c_time = date("H:i:s");
        $data = [$request_code => $request_number];
        $attendsTable = TableRegistry::get('Attends');
        $studentsTable = TableRegistry::get('Students');
        if ($this->request->is('post')) {
            $request_code = "NORMAL_REQUEST_CODE";
            $request = json_decode(file_get_contents('php://input'), true);
            $ic_number = $request['id'];
            // 朝HR開始前:true, 開始後:false
            // 帰りHR 開始前:true, 開始後: false
            $request_judge = $request['judge'];
            $students_result = $studentsTable->find()->select(['student_number'])->where(['ic_number'=>$ic_number]);
            foreach ($students_result as $result) {
                $student_id = $result->student_number;
            }
            // $request_number = $student_id;
            $atte_result = $attendsTable->find()
            ->where(['student_number'=>$student_id])
            ->where(['created'=>$today]);
            foreach($atte_result as $result) {
                $atte_id = $result->id;
            }

            if (empty($atte_id)) {
                $attend = $attendsTable->newEntity();
                $attend->student_number = $student_id;
                $attend->attend_time = $c_time;
                if ($request_judge) {
                    $attend->attend_state = 1;
                } else {
                    $attend->attend_state = 2;
                }
                $attend->created = $today;
                $attendsTable->save($attend);
            } else {
                $attend = $attendsTable->get($atte_id);
                $attend->leave_time = $c_time;
                if ($request_judge) {
                    $attend->leave_state = 3;
                } else {
                    $attend->leave_state = 1;
                }
                $attend->all_situation = 1;
                $attendsTable->save($attend);
            }
            $request_number = 200;
            $data = [$request_code => $request_number];
        }
        $this->response->body(json_encode($data));
    }

}