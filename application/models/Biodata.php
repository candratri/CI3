<?php
class Bioadata extends CI_model {


	public function get_query_manual_array(){
		$query = $this->db->$query('
			SELECT * FROM Bioadata
			');
		return $query->result_array();
	}
}
?>