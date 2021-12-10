<?php
class Database{
private static $hostname = "localhost";
private static $username = "Victor";
private static $password = "";
private static $database = "db";
private static $connection = NULL;

public static function getConnection()  {
  if (!self::$connection){
     self::$connection = new mysqli(self::$hostname, self::$username, 
	                                self::$password, self::$database);
     if (self::$connection->connect_error) {
	    die('Connect Error: ' . self::$connection->connect_error);
     }
  }
  return self::$connection;
}



}