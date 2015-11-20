<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');


class Sutagaogames_model extends CI_Model {
	protected $table;
	protected $id;
function __construct(){
parent::__construct();
$this->load->database();

		$this->table = 'usuario';
		$this->id = 'usuario';

}

function crearusuario($data){

	$this->db->insert('usuario',array('nombre'=> $data['nombre'], 'apellido'=>$data['apellido'],'usuario'=>$data['usuario'], 'edad'=>$data['edad'], 'pass'=>$data['contra'], 'correo'=>$data['correo'], 'tuser'=>2 ));
}
function obtenerUsuario(){

	$query= $this->db->get('usuario');
	if($query->num_rows()>0)return $query;
	
}

	function get($username='', $password='') {
		return $this->db->get_where($this->table, array('usuario' => $username,'pass' => $password))->row();
	}


function obteneruser($username=''){

	return $this->db->query("SELECT tuser FROM usuario WHERE usuario='".$username."'");
}

function baja ($nombre) {
 $this->db->where('usuario', $nombre);
 $this->db->delete('usuario');
 }

function obtenerContacto($idContacto) {
$this->db->select("nombre, apellido, usuario, edad, pass, correo, tuser");
$this->db->from('usuario');
$this->db->where("usuario = '".$idContacto."'");
$contacto = $this->db->get();
return $contacto->result();
}

function update($data) {
 $this->db->set('nombre', $data['nombre']);
 $this->db->set('apellido', $data['apellido']);
 $this->db->set('usuario', $data['usuario']);
 $this->db->set('edad', $data['edad']);
 $this->db->where('pass', $data['pass']);
 $this->db->where('correo', $data['correo']);
 $this->db->where('tuser', $data['tuser']);
 $this->db->update('usuario');
 }

}





?>