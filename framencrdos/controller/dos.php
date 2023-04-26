<?php 
	session_start();
	require 'config.php';
	require 'lib/proveedor.php';

	$c = new proveedores();
	$p['mensaje'] = '';

	//Guardar
	if (isset($_POST['txtNombre']))
	{
		$c->SaveP($_POST['txtNombre'], $_POST['txtEmail'], $_POST['txtTelefono'], $_POST['txtCiudad'], $_POST['txtPais']);
        $p['mensaje'] = 'registro guardado';
		$p['mensaje'] = $c->ShowP('%');
	}

	//Borrar
	if(isset($_POST['id']))
	{
		$c->DeleteP($_POST['id']);
		$p['mensaje']= $c->ShowP('%');
	}
	View('dos',$p);
 ?>