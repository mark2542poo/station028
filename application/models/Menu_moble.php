<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_moble extends CI_Model {
	function __construct(){
			parent::__construct();
			$this->load->database();
		}

		function inser($data){
			$this->db->insert('station28',$data);
        }

		function Allbus(){
			$this->db->select('*');
			$result = $this->db->get('station28');
			return $result->result_array();
		}

}
