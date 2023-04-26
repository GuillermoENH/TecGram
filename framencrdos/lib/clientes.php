<?php 
	class Clientes
	{
		function Save($nombre,$apellidos,$email,$telefono,$direccion)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("insert into clientes values (null, ?,?,?,?,?)");
			$q->bind_param('sssss',$nombre,$apellidos,$email,$telefono,$direccion);
			$q->execute();
			$q->close();
		}
		
		function Delete($idc)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("delete from clientes where idc=?");
			$q->bind_param('s',$idc);
			$q->execute();
			$q->close();
		}

		function Show($nombre)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("select * from clientes where nombre like ?");
			$q->bind_param('s',$nombre);
			$q->execute();
			$q->bind_result($id, $nom, $ap, $em, $tel, $dir);
			$rs ='<table class="table table-bordered table-striped">
			<thead>
			<th>No</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Direccion</th>
			<th></th>
			</thead><tbody>';
			while($q->fetch())
			{
				$rs = $rs.'<tr>
				<td>'.$id.'</td>
				<td>'.$nom.'</td>
				<td>'.$ap.'</td>
				<td>'.$em.'</td>
				<td>'.$tel.'</td>
				<td>'.$dir.'</td>
				<td>
				<form method="post" action="uno" enctype="multipart/form-data">
				<button class="btn btn-danger">X</button>
				<input type="hidden" name="id" value="'.$id.'">
				</form>
				</td></tr>';
			}
			$q->close();
			return $rs.'</tbody></table>';
		}
	}
 ?>