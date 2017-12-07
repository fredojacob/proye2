<?php
/**
* 
*/
class conexion
{
	private $host="localhost";
	private $dbname="openiso";
	private $user="root";
	private $pass="";
	private $conexion=null;
	public function conecta()
	{

		try
		{

			$this->conexion=new PDO("mysql:
				host=$this->host;
				dbname=$this->dbname",
				$this->user,
				$this->pass);

					$this->conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

				$this->conexion->exec("SET CHARACTER SET utf8");
				return $this->conexion;
				

		}catch( Exception $e)
		{
			echo "error".$e->getMessage();

		} finally 
		{
			$this->conexion=null;

		}
	}
}


  ?>