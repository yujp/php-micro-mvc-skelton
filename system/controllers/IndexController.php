<?php
declare(strict_types=1);
namespace App\Controllers;

final class IndexController extends \MicroMvc\Controller {
    public function index(){
        //$this->_response::json($this->_request::server());
        //$this->_response::json($this->_config::get('db.type'));
        //$this->_response::json($this->_config::get()->db->type);
        
        $row = $this->_models->SampleEntity->fetchDbVersion();
        //$row = $this->SampleService->fetchDbVersion();
        $this->_response::json($row);
    }
}
