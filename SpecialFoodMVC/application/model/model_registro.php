<?php

class Model_Registro extends Model{

	public function validar_usuario($email){

		include ('core/helpers/conexion.php');

		$sql = "SELECT * FROM Usuario WHERE email = '$email'";

        $results = mysqli_query($conexion, $sql);
        $row = mysqli_fetch_assoc($results);

		if(!(isset($row))){
			return true;
		}else{
			return false;
		}
	}

    public function guardar_usuario($nombre, $apellido, $password, $email, $cuil, $calle, $numero,$perfil){

        include ('core/helpers/conexion.php');

        //$sqlInsert="INSERT INTO Usuario (Nombre, Apellido, Password, Email, Cuil, Calle, Numero,  IdPerfil, IdEstadoAprobacionUsuario) 
        //VALUES('".$nombre."','".$apellido."',".$password.", ".$email.",".$cuil.",'".$calle."',".$numero.",".$perfil.",1);";

        $sqlInsert = "INSERT INTO `Usuario`
                    (
                        `Nombre`,
                        `Apellido`,
                        `Password`,
                        `Email`,
                        `Cuil`,
                        `IdCalle`,
                        `Numero`,
                        `IdPerfil`,
                        `IdEstadoAprobacionUsuario`)
                    VALUES
                    (
                        '$nombre',
                        '$apellido',
                        '$password',
                        '$email',
                        '$cuil',
                        1,
                        '$numero',
                        '$perfil',
                        1);";

        echo $sqlInsert;

        $result=mysqli_query($conexion,$sqlInsert);

        if(isset($result)){
            echo "<p class='labelform editado'>Guardado Correctamente</p>";
        }       
        else{
            echo "<p class='labelform editado'>El UserName Ingresado ya Existe</p>";
        }
	}
}