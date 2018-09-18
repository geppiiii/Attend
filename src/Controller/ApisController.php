<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

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

    public function add () {
        $this->autoRender = false;
        $data = null;
        if ($this->request->is('post')) {
            $datas = $this->request->data['id'];
            $data = ["NORMAL_REQUEST_CODE" => $datas];
        }
        $this->response->body(json_encode($data));

    }
}