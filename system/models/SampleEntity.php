<?php
declare(strict_types=1);
namespace App\Models;

final class SampleEntity extends \MicroMvc\Model {
    public function fetchDbVersion() {
        if ($this->_config::get('db.type') === 'pgsql') {
            return $this->_models->db->execute('SELECT version()')->fetch();
        } else {
            return $this->_models->db->execute('SELECT sqlite_version()')->fetch();
        }
    }
}
