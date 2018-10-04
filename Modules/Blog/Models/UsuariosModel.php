<?php

namespace Blog\Models;
use CodeIgniter\Model;

class UsuariosModel extends Model
{

	public function __construct()
	{
		 $this->db = \Config\Database::connect();
	}

	//---------------------------------------------------------------

	public function get_users()
	{
		return $this->db->query('SELECT Usuarios_email FROM Usuarios')->getResult();
	}

  //---------------------------------------------------------------

}
