<?php
declare(strict_types=1);
namespace App\Controllers;

final class ErrorController extends \MicroMvc\Controller {
    public function http404() {
        $params = ['status' => 404, 'message' => 'Not Found'];
        $params = array_merge($params, ['params' => $this->_params]);
        $this->_response::json($params, 404);
    }
    public function http400() {
        $params = ['status' => 400, 'message' => 'Bad Request'];
        $params = array_merge($params, ['params' => $this->_params]);
        $this->_response::json($params, 400);
    }
    public function http500() {
        $params = ['status' => 500, 'message' => 'System Error'];
        $params = array_merge($params, ['params' => $this->_params]);
        $this->_response::json($params, 500);
    }
    public function http503() {
        $this->_response::rawHeader('HTTP/1.0 503 Service Temporarily Unavailable', TRUE, 503);
    }
    public function http418() {
        $params = ['status' => 418, 'message' => 'I\'m a tea pot'];
        $params = array_merge($params, ['params' => $this->_params]);
        $this->_response::json($params, 418);
    }
    public function redirect() {
        $this->_response::redirect($this->_request::get('next'));
    }
}
