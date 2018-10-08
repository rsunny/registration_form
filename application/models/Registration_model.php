<?php
	class Registration_model extends CI_Model {
		public function __construct() {
			$this->load->database();
		}

		public function get_registrations($slug = False) {
			if ($slug == False) {
				$query = $this->db->get('registration');
				return $query->result_array();
			}

			$query = $this->db->get_where('registration', array('slug' => $slug));
			print_r($query->row_array());
			return $query->row_array();
		}

		public function get_registrations_count($data = False) {
			if ($data == False) {
				$query = $this->db->get('registration'); 
				return $query->num_rows();
			}
			
			$query = $this->db->get_where('registration', $data);
			return $query->num_rows();
		}

		public function insert_data($data = False) {
			if ($data != False) {
				return $this->db->insert('registration', $data);
			}
			return NULL;
		}
	}