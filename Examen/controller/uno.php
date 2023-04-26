<?php 
	session_start();
	require 'config.php';
	require 'lib/clientes.php';

	$c = new Clientes();
	$p['mensaje'] = '';

	//Guardar
	if (isset($_POST['txtNombre']))
	{
		$c->Save($_POST['txtNombre'], $_POST['txtApellidos'], $_POST['txtEmail'], $_POST['txtTelefono'], $_POST['txtDireccion']);
        $p['mensaje'] = 'registro guardado';
		$p['mensaje'] = $c->Show('%');
	}

	//Borrar
	if(isset($_POST['id']))
	{
		$c->Delete($_POST['id']);
		$p['mensaje']= $c->Show('%');
	}
	View('uno',$p);
 ?>