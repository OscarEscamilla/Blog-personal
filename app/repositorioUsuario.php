<?php 

/**
 * 
 */
class ClassName {
	
	public static function obtenerDatos($conexion){

		$usuarios = array();

		if (isset($conexion)) {

			$usuarios_array = array();//alamcena todos los datos recuperados de la tabla usuarios
			try {
				include_once('usuario.php');//incluye la clase usuario para enviar los datos a ella
				

				$sql = "SELECT * FROM usuarios";// consulta sql (string)
				$sentencia = $conexion -> prepare($sql);// la variable sentencia almacena el prepare statement haciendo referencia a la variable conexion 
				$resultado = $sentencia -> fetchAll();
				if (count($resultado)) {//evalua con la funcion count el resultado de la consulta si se obtiene algo 
					foreach ($resultado as $fila) {//ciclo que recorre el arreglo y lo va instanciando en la variable fila 
						$usuario[] = new Usuario($fila['id_usuario'], $fila['nombre'], $fila['email'], $fila['password'], $fila['fecha_registro'], $fila ['activo']); //inicializamos el array como que almacenara datos de tipo de la clase usuario
						
					}
				}else{
					print "no se obtubo ningun usuario";
				}
				
			} catch (PDOException $e) {
				print "Error" . $e -> getMessage;
			}
		}

		return $usuarios; 
		
	}

}


 ?>