<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Routing\Dispatcher;
use cake\ORM\TableRegistry;

class ApisController extends AppController {

    public function initialize () {
        parent::initialize();
        $this->Auth->allow();
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
                $teacherResult = $teachersTable->find()->where(['username' => $_POST['str']]);
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
                $teacher->username = $_POST['username'];
                $teacher->ic_number = $_POST['ic_number'];
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
                //$student->student_number = "1801442";
                //$student->ic_number = "012E390824C439A3";
                $student->student_number = $_POST['stnum'];
                $student->ic_number = $_POST['id'];
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
        $atte_state;
        $data = [$request_code => $request_number];
        $attendsTable = TableRegistry::get('Attends');
        $studentsTable = TableRegistry::get('Students');
        $decisionsTable = TableRegistry::get('Decisions');
		

        if ($this->request->is('post')) {
            $request = json_decode(file_get_contents('php://input'), true);
            $ic_number = $_POST['id'];
            // 朝ホームルーム開始前 sun:true 開始後 sun:false
            // 朝HR開始前:false, 開始後:true
            // 帰りHR 開始前:true, 開始後: false
            $request_judge = $_POST['judge'];
            $request_sun = $_POST['sun'];
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
                $atte_state = $result->attend_state;

            }
            if ($atte_state == 0) {
                $attend = $attendsTable->get($atte_id);
                $attend->attend_time = $c_time;
                if (!$request_judge) {
                    $decisions = $decisionsTable->find()->where(['description' => '出席'])->toArray();
                    $attend->attend_state = $decisions[0]['judge_number'];
                } else {
                    $decisions = $decisionsTable->find()->where(['description' => '遅刻 '])->toArray();
                    $attend->attend_state = $decisions[0]['judge_number'];
                }
                $attend->created = $today;
                $attendsTable->save($attend);
            } else {
                if (!$request_sun) {
                    $decisions = $decisionsTable->find()->where(['description' => '早退'])->toArray();
                    $attend = $attendsTable->get($atte_id);
                    $attend->leave_time = $c_time;
                    $attend->leave_state = $decisions[0]['judge_number'];
                    $attend->all_situation = $decisions[0]['judge_number'];
                    $attendsTable->save($attend);
                } else {
                    $decisions = $decisionsTable->find()->where(['description' => '出席'])->toArray();
                    $attend = $attendsTable->get($atte_id);
                    $attend->leave_time = $c_time;
                    $attend->leave_state = $decisions[0]['judge_number'];
                    $attend->all_situation = $decisions[0]['judge_number'];
                }
                $attendsTable->save($attend);
            }
            $request_code = "NORMAL_REQUEST_CODE";
            $request_number = 200;
            $data = [$request_code => $request_number];
        }
        $this->response->body(json_encode($data));
    }
}
