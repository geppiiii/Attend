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
        $this->Auth->allow(['add', 'logout','addUser']);
    }

    public function addUser(){
        $teachersTable = $this->getTableLocator()->get('Teachers');
        if ($this->request->is('post')) {
            $teacher = $teachersTable->newEntity();
            $teacher->username = $this->request->data['username'];
            $teacher->password = $this->request->data['password'];
            $teacher->role = 'admin';
            //$teacher->created = $this->request->data['created'];
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


    public function login(){
        if ($this->request->is('post')) {
            echo $this->request->data['username'];
            echo $this->request->data['password'];
            echo '---------------';
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->redirect($this->Auth->redirectUrl());
            }else{
                $this->Flash->error(__('ユーザ名もしくはパスワードが間違っています'));
                $this->redirect(['action'=>'login']);
            }
        }
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
