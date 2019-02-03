<?php
declare(strict_types=1);

//$this->_response::json($this->_request::get());
//$this->_response::json($this->_request::post());
//$this->_response::json($this->_request::server());
//$this->_response::json($this->_config::get('db.type'));
//$this->_response::json($this->_config::get()->db->type);

$row = $this->_models->SampleEntity->fetchDbVersion();
$this->_response::json($row);
