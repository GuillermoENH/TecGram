<?php 
	class eventoslib
	{
		function Alert($message, $type)
		{
		echo '<div class="alert alert-' . $type . '" role="alert">' . $message . '</div>';
		}
	}
 ?>