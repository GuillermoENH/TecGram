<?php 
	class Proveedores
	{
		function SaveP($nombre,$email,$telefono,$ciudad,$pais)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("insert into proveedores values (null, ?,?,?,?,?)");
			$q->bind_param('sssss',$nombre,$email,$telefono,$ciudad,$pais);
			$q->execute();
			$q->close();
		}
		
		function DeleteP($idp)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("delete from proveedores where idp=?");
			$q->bind_param('s',$idp);
			$q->execute();
			$q->close();
		}

		function ShowP($nombre)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("select * from proveedores where nombre like ?");
			$q->bind_param('s',$nombre);
			$q->execute();
			$q->bind_result($id, $nom, $em, $tel, $ciu, $pai);
			$rs ='<table class="table table-bordered table-striped">
			<thead>
			<th>No</th>
			<th>Nombre</th>
			<th>Email</th>
			<th>Telefono</th>
			<th>Ciudad</th>
			<th>Pais</th>
			<th></th>
			</thead><tbody>';
			while($q->fetch())
			{
				$rs = $rs.'<tr>
				<td>'.$id.'</td>
				<td>'.$nom.'</td>
				<td>'.$em.'</td>
				<td>'.$tel.'</td>
				<td>'.$ciu.'</td>
				<td>'.$pai.'</td>
				<td>
				<form method="post" action="dos" enctype="multipart/form-data">
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