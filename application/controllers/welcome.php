<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Private_Controller  {
public $query;
public $query2;
public $query3;
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	function __construct(){

parent::__construct();


	}
	public function index()

	{

		if(!@$this->user) redirect ('welcome/login');
		$this->load->view('sutagaogames/headers');
		$this->load->view('index');
	}

	public function index2()

	{

		if(!@$this->user) redirect ('welcome/login');
		$this->load->view('sutagaogames/headers');
		$this->load->view('index2');
	}

		public function login() {

		$data = array();

		// Añadimos las reglas necesarias.
		$this->form_validation->set_rules('usuario', 'Usuario', 'required');
		$this->form_validation->set_rules('pass', 'Contraseña', 'required');

		// Generamos el mensaje de error personalizado para la accion 'required'
		$this->form_validation->set_message('required', 'El campo %s es requerido.');

		// Si no esta vacio $_POST
		if(!empty($_POST)) {
			// Si las reglas se entramos a la condicion.
			if ($this->form_validation->run() == TRUE) {
				
				// Obtenemos la informacion del usuario desde el modelo users.
				$logged_user = $this->sutagaogames_model->get($_POST['usuario'], $_POST['pass']);
				$query= $this->sutagaogames_model->obteneruser($_POST['usuario']);
					
	$query2="us";
	$query3="adm";
	
				// Si existe el usuario creamos la sesion y redirigimos al index.
				if($logged_user) {
					if($query==1){

						
						$this->session->set_userdata('logged_user', $logged_user);
					redirect('welcome/index');
				}
				else if($query==2){
						
						$this->session->set_userdata('logged_user', $logged_user);
					 redirect('welcome/index2');
					
					}

				} else {
					// De lo contrario se activa el error_login.
					$data['error_login'] = TRUE;
				}
			}
		}
		$this->load->view('sutagaogames/headers');
		$this->load->view('welcome_message', $data);
	}

	public function logout() {
		$this->session->unset_userdata('logged_user');

		redirect('welcome/index');
	}
	public function borrar() {
		$this->load->view('sutagaogames/headers');
		$this->load->view('sutagaogames/editar');
	}

	function baja() {
 //obtenemos el nombre
 $nombre = $_POST['txtNombre'];
 //cargamos el modelo y llamamos a la función baja(), pasándole el nombre del registro que queremos borrar.
 $this->load->model('sutagaogames_model');
 $this->sutagaogames_model->baja($nombre);
 redirect('welcome/index');
 
 }
public function edit() {
		$this->load->view('sutagaogames/headers');
		$this->load->view('sutagaogames/edit');
	}
 function accion() {
 	$usuario=$_POST['editar'];
 
 $this->load->model('sutagaogames_model');
 $data['usuario'] = $this->sutagaogames_model->obtenerContacto($usuario);
$this->load->view('sutagaogames/headers');
 $this->load->view('sutagaogames/edita', $data);
 }

  function editar() {
 //recogemos los datos por POST
 $data['nombre'] = $_POST['nombre'];
 $data['apellido'] = $_POST['apellido'];
 $data['usuario'] = $_POST['usuario'];
 $data['edad'] = $_POST['edad'];
 $data['pass'] = $_POST['pass'];
 $data['correo'] = $_POST['correo'];
 $data['tuser'] = $_POST['tuser'];
 //cargamos el modelo y llamamos a la función update()
 $this->load->model('sutagaogames_model');
 $this->sutagaogames_model->update($data);
 //volvemos a cargar la primera vista
 redirect('welcome/index');
 }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */