<?php 

namespace App\Models;
	
use App\Core\Model;

/**
 * summary
 */
class ColorPelo extends Model
{

	protected $table = 'coloresPelo';

	public function get(){
		return $this->db->selectAll($this->table);
	}

	public function insert(array $turno){
		$this->db->insert($this->table, $turno);
	}

	public function getById($id){
		return $this->db->selectWhere($this->table, "id", $id);
	}

}
