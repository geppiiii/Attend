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

    //HR確認画面
    public function home(){
        $this->Attend = TableRegistry::get('Attends');
		$this->Students = TableRegistry::get('Students');
		$this->set('entity',$this->Attend->newEntity());
		//欠席じゃなくてattend_timeに時間が入力されてないひと,['conditions'=>['attend_time'=> 空欄の人 ]]
		$attend = $this->Attend->find('all',['conditions'=>['attend_state <>'=> "1"]]);
		$this->set('attend',$attend);
		$student = $this->Students->find('all');
		$this->set('student',$student);
    }

    //HR確認画面＿更新タップ時処理
    public function updateRecord(){
		$this->Attend = TableRegistry::get('Attends');
		if($this->request->is('post')){
			$entity = $this->Attend->find('all',['conditions'=>['attend_state <>'=> "1"]]);
            $this->Attend->patchEntities($entity, $this->request->data);
            $this->Attend->save($entity);
			$this->redirect(['action' => "homeroom"]);
		}
    }

    //授業中確認画面
    public function lessonconf(){
		$this->Student_Lesson = TableRegistry::get('Student_Lessons');
		$this->Students = TableRegistry::get('Students');

		$student = $this->Students->find('all');
		$this->set('student',$student);
		$this->set('entity',$this->Student_Lesson->newEntity());
    }

    //授業中確認画面＿更新タップ時処理
    public function editRecord(){
		//DB接続
		$this->Students = TableRegistry::get('Students');
		$this->Student_Lesson = TableRegistry::get('Student_Lessons');
		//あたいの受け取り
		if(isset($this->request->data['tikoku'])){
			$tilesson = $this->request->data['tikoku'];
			$this->_lessonlate($tilesson);
		}

		if(isset($this->request->data['kekka'])){
			$kelesson = $this->request->data['kekka'];
			$this->_lessonclerk($kelesson);
		}
		$end = $this->Student_Lesson->find('all');
		$this->set('lesson',$end);
		$student = $this->Students->find('all');
		$this->set('student',$student);
		$this->set('entity',$this->Student_Lesson->newEntity());
    }
    //授業中確認画面＿遅刻判定処理
    public function _lessonlate($lesson){
		foreach ($lesson as $key) {
			//送られてきた学籍番号に該当する人の検索
			$sdata = $this->Student_Lesson->find('all',['conditions'=>['student_number'=>$key]]);
			//選択された人分繰り返す
			foreach ($sdata as $obj) {
				$num = $obj->student_number;
				$tikoku = $obj->lete + 1;
				//更新処理
				$this->_tikokuupdate($num,$tikoku);
			}
		}
    }
    //授業中確認画面＿遅刻更新処理
    public function _tikokuupdate($late,$tikoku){
		$student_number = $late;
		$student_Lesson = TableRegistry::get('Student_Lessons');
		$lesson = $student_Lesson->get($student_number);
		$lesson->lete = $tikoku;
		$student_Lesson->save($lesson);
	}

    //授業中確認画面＿欠課判定処理
    public function _lessonclerk($kekka){
		foreach ($kekka as $key) {
			//送られてきた学籍番号に該当する人の検索
			$sdata = $this->Student_Lesson->find('all',['conditions'=>['student_number'=>$key]]);
			//選択された人分繰り返す
			foreach ($sdata as $obj) {
				$num = $obj->student_number;
				$kekka = $obj->clerk + 1;
				//更新処理
				$this->_kekkaupdate($num,$kekka);
			}
		}
    }

    //授業中確認画面＿欠課更新処理
    public function _kekkaupdate($late,$tikoku){
		$student_number = $late;
		$student_Lesson = TableRegistry::get('Student_Lessons');
		$lesson = $student_Lesson->get($student_number);
		$lesson->clerk = $tikoku;
		$student_Lesson->save($lesson);
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
