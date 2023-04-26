<?php 
	class Functions
	{
		function Save($fecha,$cliente,$destino,$costo,$observaciones)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("insert into pedidos values (null, ?,?,?,?,?)");
			$q->bind_param('sssss',$fecha,$cliente,$destino,$costo,$observaciones);
			$q->execute();
			$q->close();
		}
		
		function Delete($idp)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("delete from pedidos where idp=?");
			$q->bind_param('s',$idp);
			$q->execute();
			$q->close();
		}

		function Show($fecha)
		{
			$conn = new mysqli(s,u,p,bd);
			$conn->set_charset("utf8");
			$q = $conn->stmt_init();
			$q->prepare("select * from pedidos where fecha like ?");
			$q->bind_param('s',$fecha);
			$q->execute();
			$q->bind_result($id, $fec, $cli, $des, $cos, $obs);
			$rs ='<table class="table table-bordered table-striped"><thead>
			<th>No</th>
			<th>Fecha</th>
			<th>Cliente</th>
			<th>Destino</th>
			<th>Costo</th>
			<th>Observaciones</th>
			<th></th></thead><tbody>';
			while($q->fetch())
			{
				$rs = $rs.'<tr>
				<td>'.$id.'</td>
				<td>'.$fec.'</td>
				<td>'.$cli.'</td>
				<td>'.$des.'</td>
				<td>'.$cos.'</td>
				<td>'.$obs.'</td>
				<td>
				<form method="post" action="home" enctype="multipart/form-data">
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