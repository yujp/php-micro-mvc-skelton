<?php
declare(strict_types=1);

$params = ['status' => 400, 'message' => 'Bad Request'];
$params = array_merge($params, ['params' => $this->_params]);
$this->_response::json($params, 400);
