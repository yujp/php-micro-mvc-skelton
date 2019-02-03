<?php
declare(strict_types=1);
namespace App\Models;

final class Db extends \MicroMvc\Model {
    protected $_db = NULL;

    protected function _connect() {
        $config = $this->_config::get('db');
        $dsn = static::_makeDsn($config);
        $options = [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
            \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_OBJ
        ];
        return $this->_db = new \PDO($dsn, $config->user, $config->pass, $options);
    }
    protected function _makeDsn($config):string {
        $list = [];
        if (isset($config->params)){
            foreach ($config->params as $k => $v) {
                $list[] = $k . '=' . $v;
            }
        }
        return $config->type . ':' . implode(';', $list);
    }
    protected function _db() {
        return ($this->_db) ? $this->_db: $this->_connect();
    }
    public function execute(string $sql, array $params = []): \PDOStatement {
        $stmt = $this->_db()->prepare($sql);
        $stmt->execute($params);
        return $stmt;
    }
    public function prepare(string $sql): \PDOStatement {
        return $this->_db()->prepare($sql);
    }
}
