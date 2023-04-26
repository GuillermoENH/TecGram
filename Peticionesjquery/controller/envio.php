<?php 
        session_start();
	//procesar peticion
    if(isset($_POST['_envio']))
    {
        echo $msg = $_POST['_envio'];
    }
?>