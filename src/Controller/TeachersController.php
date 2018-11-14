<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use PHPExcel_IOFactory;
use Cake\ORM\TableRegistry;


class TeachersController extends AppController {
    public function initialize () {
        parent::initialize();
        $this->loadComponent('RequestHandler');
    }

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        // ユーザーの登録とログアウトを許可します。
        // allow のリストに "login" アクションを追加しないでください。
        // そうすると AuthComponent の正常な機能に問題が発生します。
        // $this->Auth->allow(['add', 'logout']);
    }

    public function addUser(){
        $teachersTable = $this->getTableLocator()->get('Teachers');
        if ($this->request->is('post')) {
            $teacher = $teachersTable->newEntity();
            $teacher->username = $this->request->data['username'];
            $teacher->password = $this->request->data['password'];
            $teacher->role = $this->request->data['role'];
            $teacher->created = $this->request->data['created'];
            $teacher->ic_number = $this->request->data['ic_number'];
            $teachersTable->save($teacher);
        }
    }

    public function index()
    {
        $this->set('teacher', $this->Teachers->find('all'));
    }

    public function view($id)
    {
        $user = $this->Teachers->get($id);
        $this->set(compact('teacher'));
    }

    public function add(){
        //エンティティ作成
        $teacher = $this->Teachers->newEntity();
        //値を受け取った時の処理
        if ($this->request->is('post')) {
            //値を受け取りテーブルの肩にはめる
            $teacher = $this->Teachers->patchEntity($teacher, $this->request->getData());
            //データの保存
            if ($this->Teachers->save($teacher)) {
                //成功した場合
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }else{
                //失敗した場合
                $this->Flash->error(__('Unable to add the user.'));
            }
        }
        $this->set('teacher', $teacher);
    }

/*    public function login() {
        $session = $this->request->session();
        if($this->request->is('post')){
            if(isset($_POST['username'])){
                $data = $this->Teachers->find('all')->where(['username' => $_POST['username']]);
                foreach($data as $obj){
                    echo $obj->password;
                    if(strcmp($_POST['password'],$obj->password) == 0){
                        $session->write('id',$obj->id);
                        //return $this->redirect('/att/home');
                    }else{
                        //echo 'false';
                    }
                }
            }
        }
    }
*/

    public function login(){
        if ($this->request->is('post')) {
            echo $this->request->data['username'];
            echo $this->request->data['password'];
            echo '---------------';
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('ユーザ名もしくはパスワードが間違っています'));
        }
    }

    public function logout() {
        $logoutUrl = $this->Auth->logout();
        $this->redirect($logoutUrl);
    }
    
    public function qaz(){

    }

    public function download ( $id = "8" ){
 
        // 入出力の情報設定
        $driPath    = realpath(TMP) . "/excel/";
     
        $inputPath  = $driPath . "ttt.xlsx";
        $sheetName  = "Sheet1";
        $outputFile = "output_" . $id . ".xlsx";
        $outputPath = $driPath . $outputFile;
     
        // Excalファイル作成
        $reader = PHPExcel_IOFactory::createReader('Excel2007');
        $book  = $reader->load($inputPath);
        $sheet  = $book->getSheetByName($sheetName);
     
        // データを配置
        $sheet->setCellValue("A3","1601011");
        $sheet->setCellValue("B3","田島直人");
        $sheet->setCellValue("C3",'出席qaz');
        $sheet->setCellValue("B6",1);
        $sheet->setCellValue("B7","test");
        $sheet->setCellValue("B8","=B5+B6" );
     
        // 保存
        $book->setActiveSheetIndex(0);
        $writer = PHPExcel_IOFactory::createWriter($book, 'Excel2007');
        $writer->save($outputPath);
        $this->redirect(['action' => 'qaz']);
    }

    public function attendance(){
        // 出席トレース
        // 値入力
        $products = [
            [1,4,4,2,2,2],
            ['',       14800, 1],
            ['Microsoft PowerPoint 2016', 15000, 1],
        ];
        
        // テンプレート読み取り
        $book = PHPExcel_IOFactory::load(realpath(TMP) . '/excel/出席トレース.xlsx');
        $sheet = $book->getActiveSheet();
        
        // 編集
        $rowOffset = 3;
        foreach ($products as $row => $product) {
            foreach ($product as $col => $value) {
                $sheet->setCellValueByColumnAndRow($col+4, $row + $rowOffset, $value);
            }
        }
        
        // 保存
        $writer = PHPExcel_IOFactory::createWriter($book, 'Excel2007');
        $writer->save(realpath(TMP) . '/excel/出席トレース3.xlsx');
        $this->redirect(['action' => 'qaz']);

    }
    public function a(){
        // 月

    }


}
