<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contacto extends CI_Controller {

		public function index()
	{
		$this->load->view('sutagaogames/headers');
		$this->load->view('sutagaogames/contacto');
		
	}
}
