<?php
    // echo 'Hola';

	function GenerarTabla(){
		require '../../model/crud_users.php';

		$objCrud = new CrudUsers;

		$data = $objCrud->selectUsersComplete();
			
		//Se pregunta si el dato que tiene la variable datos es boolean o no, ya que CaptarDatos entregara un false si la conexion a la base de datos falla
		if(gettype($data) == 'boolean'){
			echo 'No se pudo conectar a la bade de datos';
		}else{
			//Si se conecta, se contruye la tabla y se forma de manera dinamica por la cantidad de datos
			// echo '<p>TABLA LISTADA</p><br>';
			echo '<table>';
				echo '<tr>';
					echo '<th class="th_table_users">ID</th>';
					echo '<th class="th_table_users">Nombre</th>';
					echo '<th class="th_table_users">Apellidos</th>';
					echo '<th class="th_table_users">Cuentas</th>';
					echo '<th class="th_table_users">Tipo Usuario</th>';
					echo '<th class="th_table_users">Telefono</th>';
					echo '<th class="th_table_users">Contraseñas</th>';
					echo '</tr>';		
			while($counter = $data->fetch_assoc()){
				echo '<tr>';
				echo '<td class="td_table_users">'.$counter['id'].'</td>';
				echo '<td class="td_table_users">'.$counter['name_user'].'</td>';
				echo '<td class="td_table_users">'.$counter['lastname_user'].'</td>';
				echo '<td class="td_table_users">'.$counter['users_accounts'].'</td>';
				echo '<td class="td_table_users">'.$counter['type_user'].'</td>';
				echo '<td class="td_table_users">'.$counter['phone'].'</td>';
				echo '<td class="td_table_users">'.$counter['passwords'].'</td>';
				echo '</tr>';
			}
			echo '</table>';
		}
	}


?>
