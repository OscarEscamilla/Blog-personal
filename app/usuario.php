<?php 

/**
 * 
 */
class Usuario{

	private $id;
	private $nombre;
	private $email;
	private $fecha_registro;
	private $activo;
	private $password;
	
	function __construct($id, $nombre, $email, $fecha_registro, $activo){
		$this -> id = $id;
		$this -> nombre = $nombre;
		$this -> email = $email;
		$this -> fecha_registro = $fecha_registro;
		$this -> activo = $activo;
	}

	//getters y seters de las variables haciendo referencia a la tabla usuarios
	public function getId(){
		return $this => $id;
	}

	public setId($id){
		this -> id = $id;
	}

	public function getNombre(){
		return this -> $nombre;
	}

	public function setNombre($nombre){
		this -> nombre = $nombre;
	}

	public function getEmail(){
		return this -> $email;
	}

	public function setEmail($email){
		this -> email = $email;
	}

	public function getFechaRegistro(){
		return  this -> $fecha_registro;
	}

	public function setFechaRegistro($fecha_registro){
		this -> fecha_registro = $fecha_registro;
	}

	public function getActivo(){
		return this -> $activo;
	}

	public function setActivo(){
		this -> activo = $activo;
	}

	public function getPassword(){
		return this -> $password;
	}

	public function setPassword($password){
		this -> password = $password;
	}

}
	

 ?>