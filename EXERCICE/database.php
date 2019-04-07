<?php

 class database{

 	private static $host = 'localhost';
 	private static $dbname = 'exercice_nan';
 	private static $user = 'root';
 	private static $password = '';
 	private static $connexion = null;

 	public static function connexion()
 	{
 		try
 		{
 		 self::$connexion = new PDO('mysql:host='.self::$host.';dbname='.self::$dbname.';charset=utf8',self::$user,self::$password);
 		}
 		catch(Exception $e)
 		{
 			die($e->getmessage());
 		}
 		

 		return self::$connexion;
 	}

 	public static function deconnexion()
 	{
 		self::$connexion = null;
 	}
 }


?>