<?php
declare(strict_types=1);

$params = ['status' => 404, 'message' => 'Not Found'];
$params = array_merge($params, ['params' => $this->_params]);
$this->_response::json($params, 404);
