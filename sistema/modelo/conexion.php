<?php

class Conexion
{
	static private $instancia = null;

	static public function obtenerConexion()
	{
		if ( self::$instancia == null )
		{
			self::$instancia = new mysqli("localhost","root","12345678","sistemas");
		}

		return self::$instancia;
	}
}

?>