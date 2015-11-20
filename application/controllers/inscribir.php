<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class inscribir extends CI_Controller {
	function __construct(){

parent::__construct();
$this->load->model('sutagaogames_model');

	}

    public function index()
  {
    $this->load->view('sutagaogames/headers');
    $this->load->view('sutagaogames/inscribir');
    
  }
  public function verusuario(){

  	$data['usuario']=$this->sutagaogames_model->obtenerUsuario();
  	$this->load->view('sutagaogames/headers');
  	$this->load->view('sutagaogames/mostrarusuarios',$data);

  }

  
}
