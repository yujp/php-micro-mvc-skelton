<?php
declare(strict_types=1);

$params = ['status' => 500, 'message' => 'System Error'];
$params = array_merge($params, ['params' => $this->_params]);
$this->_response::json($params, 500);
