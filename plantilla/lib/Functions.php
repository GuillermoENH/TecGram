<?php 
	class FFunction
	{
		function Done($idu)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("call proccess(?)");
			$q->bind_param('s',$idu);
			$q->execute();
			$q->close();
		}
		
	}
 ?>