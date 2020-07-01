<?php
class Connect
{
	private static $c= "mysql:dbname=brokerdb;host=localhost;port=3306";
	private static $user = "root";
	private static $pass = "";
    public static function connexion(){
        try{
            return new PDO(self::$c, self::$user,self::$pass);
        }
        catch(PDOException $e){
            return null;
        }
    }
}
?>