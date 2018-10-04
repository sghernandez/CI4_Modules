<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Home extends Controller
{
	public function index()
	{
		$db = \Config\Database::connect();
		$users = $db->query('SELECT Usuarios_email FROM Usuarios')->getResult();

		return view('welcome_message', compact('users'));
	}

	//--------------------------------------------------------------------

}
