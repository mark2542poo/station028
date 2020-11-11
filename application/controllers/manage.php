<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manage extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('Menu_moble');
	}

	

	public function inser()
	{
		$data = array(
			'procession' => $this->input->post("procession"),
			'station1' => $this->input->post("station1"),
			'timeout' => $this->input->post("timeout"),
			'to' => $this->input->post("to"),
			'out' => $this->input->post("out"),
			'station2' => $this->input->post("station2"),
			'timein' => $this->input->post("timein"),
			'note' => $this->input->post("note"),

		);
	     
			// $this->Menu->menu_insert($data);
			$this->Menu_moble->inser($data);
			$this->load->view('view');
			// $this->load->view('view_insert_successwithmenulink');
	}
      public function view(){
	    $result['register'] = $this->Menu_moble->Allbus();
		$this->load->view('view',$result);

		
	}
      public function inser()  
      {
        $this->load->view('view');
      }
     
    }



