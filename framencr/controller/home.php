<?php 
	session_start();
	require 'config.php';
	require 'lib/Functions.php';
	require 'lib/eventoslib.php';

	$c = new Functions();
	$d = new eventoslib();

	$p['mensaje'] = '';

	//Guardar
	if (isset($_POST['txtFecha']))
	{
		$c->Save($_POST['txtFecha'], $_POST['txtCliente'], $_POST['txtDestino'], $_POST['txtCosto'], $_POST['txtObservaciones']);
		$d->Alert('El registro se guardo, (naisu)','warning');
		$p['mensaje'] = $c->Show('%');
	}

	//Borrar
	if(isset($_POST['id']))
	{
		$c->Delete($_POST['id']);
		$d->Alert('El registro se elimino, (llama)','secondary');
		$p['mensaje']= $c->Show('%');
	}
	View('home',$p);
 ?>