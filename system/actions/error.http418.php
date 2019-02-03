<?php
declare(strict_types=1);

$params = ['status' => 418, 'message' => 'I\'m a tea pot'];
$params = array_merge($params, ['params' => $this->_params]);
$this->_response::json($params, 418);
