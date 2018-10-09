<?php 

/**
 * 
 */
class Conexion{

	private static $conexion;

	public static function abrir_conexion(){
		if(!isset(self::$conexion)){
			try {
				include_once('config.php');
				self::$conexion = new PDO("mysql:host=$name_server; dbname = $bd_name", $username, $password);
				self::$conexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$conexion -> exec("SET CHARACTER SET utf8");
				print "conexion abierta" . "<br>";

			} catch (PDOException $e){
				print "Error" . $e -> getMessage() . '<br>';
				die();
			}
		}
	}


	public static function cerrar_conexion(){
		if(isset(self::$conexion)){
			self::$conexion = null;
			print "conexion cerrada";
		}
	}

	public static function getConexion(){
		return self::$conexion;
	}
}

 ?>