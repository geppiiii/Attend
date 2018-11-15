<?php
namespace App\Controller;
use Cake\Event\Event;
use Cake\ORM\TableRegistry;
use App\Controller\AppController;
class AttController extends AppController{
    public function initialize(){
        parent::initialize();
        $this->loadComponent('RequestHandler');
	}

	public function beforeFilter(Event $event) {
  		parent::beforeFilter($event);
  		$this->Auth->allow();
	}

  public function index(){
  }

    //HR確認画面
  public function home(){
    $this->Attend = TableRegistry::get('Attends');
		$this->Students = TableRegistry::get('Students');
		$this->set('entity',$this->Attend->newEntity());
		//欠席じゃなくてattend_timeに時間が入力されてないひと,['conditions'=>['attend_time'=> 空欄の人 ]]
    $student = $this->Students->find('all');
    foreach ($student as $key) {
      $key->student_number;
    }
		$attend = $this->Attend->find('all',['conditions'=>['attend_time '=> "00:00:00",'created' => date("Y-m-d", time())]]);
		$this->set('attend',$attend);
		$student = $this->Students->find('all');
		$this->set('student',$student);
	}

  //欠席じゃない生徒を取得
  public function absence_date(){

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
		$registrystudents = TableRegistry::get('students');

			if($this->request->is('post')){

				$Rstudents = $registrystudents->newEntity();
				$Rstudents->student_number = $this->request->data['inputNum'];
				$Rstudents->student_name = $this->request->data['inputName'];
				$Rstudents->department = $this->request->data['inputClass'];
				$Rstudents->class = $this->request->data['inputClassA'];
				$Rstudents->year = $this->request->data['inputYear'];
				$Rstudents->attendance_number = $this->request->data['inputAttendnum'];

				if($registrystudents->save($Rstudents)) {
				}
			}
    }
    public function dailyOutput(){
        $this->attends = TableRegistry::get('attends');
		$this->students = TableRegistry::get('students');
		// UNIX TIMESTAMPを取得
		$timestamp = time();
		//今日の日付セット
		$this->set('date',date( "Y/m/d" , $timestamp ));

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

	public function monthlyOutput(){
    $this->attends = TableRegistry::get('attends');
    $this->set('entity',$this->attends->newEntity());
  }

  public function keisan(){
    //DB接続
    $this->attends = TableRegistry::get('attends');
    $this->students = TableRegistry::get('students');
    $this->student_lessons = TableRegistry::get('Student_lessons');
    //今月のデータを取得
    $sdata = $this->attends->find('all',['conditions'=>['created like'=>date("Y-m", time())."%"]]);
    $student = $this->students->find('all');
    $lesson = $this->student_lessons->find('all',['conditions'=>['month'=>date("m", time())]]);
    //生徒数分の配列を作成
    foreach ($student as $key) {
      //出席すべき日数
      $total[$key->student_number]['attend'] = 0;
      //出席した日数
      $total[$key->student_number]['attended'] = 0;
      //欠席日数
      $total[$key->student_number]['absence'] = 0;
      //欠課回数
      $total[$key->student_number]['4minashi'] = 0;
      //遅刻、早退、授業遅刻回数
      $total[$key->student_number]['5minashi'] = 0;
      //みなし欠席
      $total[$key->student_number]['minashi'] = 0;
    }
    //配列に登校すべき日数を追加
    foreach ($sdata as $value) {
      if ($value->all_situation != 9) {
        if ($value->all_situation != 10) {
          if ($value->all_situation != 12) {
            $total[$value->student_number]['attend'] = $total[$value->student_number]['attend'] + 1;
          }
        }
      }
      //欠席日数を追加
      //届出欠席
      if ($value->all_situation == 7) {
        $total[$value->student_number]['absence'] = $total[$value->student_number]['absence'] + 1;
      }
      //無届け欠席
      if ($value->all_situation == 8) {
        $total[$value->student_number]['absence'] = $total[$value->student_number]['absence'] + 1;
      }
      //謹慎
      if ($value->all_situation == 11) {
        $total[$value->student_number]['absence'] = $total[$value->student_number]['absence'] + 1;
      }
      //５回みなし欠席
      //HR遅刻
      if ($value->attend_state == 2) {
        $total[$value->student_number]['5minashi'] = $total[$value->student_number]['5minashi'] + 1;
      }
      //早退
      if ($value->leave_state == 3) {
        $total[$value->student_number]['5minashi'] = $total[$value->student_number]['5minashi'] + 1;
      }
    }
    foreach ($lesson as $obj) {
      $total[$obj->student_number]['5minashi'] = $total[$obj->student_number]['5minashi'] + $obj->lete;
      $total[$obj->student_number]['4minashi'] = $total[$obj->student_number]['4minashi'] + $obj->clerk;
    }
    foreach ($student as $key) {
      //出席すべき日数
      $total[$key->student_number]['minashi'] = $total[$key->student_number]['minashi'] + floor($total[$key->student_number]['5minashi'] / 5);
      $total[$key->student_number]['minashi'] = $total[$key->student_number]['minashi'] + floor($total[$key->student_number]['4minashi'] / 4);
      $total[$key->student_number]['attended'] = $total[$key->student_number]['attend'] - $total[$key->student_number]['absence'] - $total[$key->student_number]['minashi'];

    }
    //$kaeri = $this->_ec($total);
    $total['0000001']['syussekiritu'] = $total['0000001']['attended'] / $total['0000001']['attend'];
    $this->set('total',$total);
    //echo $kaeri;
    //出席関係確認echo
    /*echo $total['0000001']['attended'] / $total['0000001']['attend'];
    echo $total['0000001']['attend'];
    echo $total['0000001']['absence'];
    echo $total['0000001']['5minashi'];
    echo $total['0000001']['4minashi'];
    echo $total['0000001']['minashi'];
    echo $total['0000001']['attended'];*/
    //return $this->redirect('/att/home');
  }

  public function _ec($count){
  }

	public function nextDailyChange(){
		$this->attends = TableRegistry::get('Attends');
		$this->students = TableRegistry::get('Students');
		$absencesTable = TableRegistry::get('Absences');
		$name = $this->students->find('all');
		$this->set('name',$name);
		if ($this->request->is('post')) {
			$absence = $absencesTable->newEntity();
			$absence->student_number = $this->request->data['student_number'];
			$absence->absence_date_start = $this->dateArray($this->request->data['start']);
			$absence->absence_date_end = $this->dateArray($this->request->data['end']);
			$absence->state = $this->request->data['reason'];
			if ($absencesTable->save($absence)) {
				$this->redirect(['action'=>'nextDailyChange']);
			}
		}
	}

	public function Dsave(){
		$Ddate= date("ymd");
		$filename= $Ddate.".xlsx";
		$filepath = "../../../tmp".$Ddate.".xlsx";
		header("Content-Type: application/vnd.ms-excel");
		header('Content-disposition: attachment; filename="'.$filename.'"');
		readfile($filepath);
	}

	public function Msave(){
		$Mdate = date("ym");
		$filename = $Mdate.".xlsx";
		$filepath = "../../../tmp".$Mdate.".xlsx";
		header("Content-Type: application/vnd.ms-excel");
		header('Content-disposition: attachment; filename="'.$filename.'"');
		readfile($filepath);
	}

	public function updaterecord(){
		//DB接続
		$this->Attend = TableRegistry::get('Attends');
		//あたいの受け取り
		$ddd = $this->request->data['conf'];
		$num = $this->request->data['aaa'];
		//受け取った値を配列へ変換
		foreach ($num as $obj) {
			$arys[] = $obj;
		}
		foreach ($ddd as $obj) {
			$aryc[] = $obj;
		}
		//配列を繰り返し処理を行う
		for($i = 0;$i<count($arys); $i++){
			$this->_homeup($arys[$i],$aryc[$i]);
		}
	}

	//選択された値を保存
	public function _homeup($student,$joutai){
		//DBへ接続
		$Attend = TableRegistry::get('Attends');
		//渡された学籍番号を検索
		$data = $Attend->get($student);
		//stateを渡された値へ変更
		$data->attend_state = $joutai;
		//変更された値を保存
		$Attend->save($data);
		return $this->redirect('/att/home');
	}

	public function dateArray($array) {
		$date = '';
		foreach ($array as $obj) {
			$date .= $obj;
		}
		$ymd = $date;
		$str = date('Y-m-d',strtotime($ymd));
		return $str;
	}

}
