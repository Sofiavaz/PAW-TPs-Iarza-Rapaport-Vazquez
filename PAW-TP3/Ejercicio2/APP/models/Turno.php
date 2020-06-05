<?php

namespace App\Models;

use App\Core\Model;

class Turno extends Model
{
    protected $table = 'turnos';

    public function get()
    {
        return $this->db->selectAll($this->table);
    }

    public function findById($id)
    {
        return $this->db->selectWhere($this->table, $id);
    }

    public function insert(array $turno)
    {
        $this->db->insert($this->table, $turno);
    }
}
