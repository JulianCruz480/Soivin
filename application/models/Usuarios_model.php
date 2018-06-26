<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios_model extends CI_Model {

	public function login($username, $password){
		$this->db->where("Nombre_de_Usuario", $username);
		$this->db->where("Password", $password);

		$resultados = $this->db->get("tb_persona");
		if ($resultados->num_rows() > 0) {
			return $resultados->row();
		}
		else{
			return false;
		}
	}
}
