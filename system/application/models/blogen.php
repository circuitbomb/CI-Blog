<?php

class Blogen extends Model {
	
	function getEntry() {
		$this->db->select('title, author, date, short, body');
		$this->db->from('entries');
		$uri = $this->uri->segment(3);
		$this->db->where('id', $uri);
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
				$data[] = $row;
			}
			return $data;
			
		}
	}
}

?>
