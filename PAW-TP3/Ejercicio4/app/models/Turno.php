<?php 

namespace App\Models;
	
use App\Core\Model;

/**
 * summary
 */
class Turno extends Model
{
	protected $table = 'turnos';

	public function get(){
		return $this->db->selectAll($this->table);
	}

	public function insert(array $turno){
		return $this->db->insert($this->table, $turno);
	}

	public function update(array $turno) {
        $this->db->update($this->table, $turno);
    }

	public function getById($id){
		return $this->db->selectWhere($this->table, "id", $id);
	}

	public function delete($turno){
	    if ($turno->diagnostico) {
            unlink($turno->diagnostico);
        }
	    $this->db->delete($this->table, $turno->id);
    }

}
