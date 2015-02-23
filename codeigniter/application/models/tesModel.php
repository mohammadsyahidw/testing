<?php

	class tesModel extends CI_Model {
	
		function getDatabase()
		{
			    $this->load->database();
			    $query = $this->db->get('testabel');
			    return $query;                            
		}
	}
?>