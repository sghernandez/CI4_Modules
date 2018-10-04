<?php

namespace Blog\Controllers;

use CodeIgniter\Controller;
use Blog\Models\UsuariosModel;

class Usuarios extends Controller
{
    public function __construct()
    {
        $this->container = 'Blog\Views\themes\CI';
        $this->Usuarios = new UsuariosModel();
    }

    //-----------------------------------------------

    public function index()
    {
    	 $data = [
    	   'title' => 'Usuarios',
    	   'view' => 'Blog\Views\usuarios\usuarios_view',
    	   'users' => $this->Usuarios->get_users(),
    	 ];

	      return view($this->container, compact('data'));
     }

    //-----------------------------------------------

}
