<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Guardar extends CI_Controller {
	function __construct(){

parent::__construct();
$this->load->helper('form');
$this->load->model('sutagaogames_model');

	}

    public function index()
  {
    $this->load->view('sutagaogames/headers');
    $this->load->view('sutagaogames/guardar');
    
  }

  public function ingresar(){
$data=array('nombre'=>$this->input->post('nombre'),'apellido'=>$this->input->post('apellido'), 'usuario'=>$this->input->post('usuario'), 
	'edad'=>$this->input->post('edad'), 'contra'=>$this->input->post('contra'), 'correo'=>$this->input->post('correo') );
$this->sutagaogames_model->crearusuario($data);

redirect('welcome/index');
    


  }


  
}
