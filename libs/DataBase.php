<?php
class DataBase {
    private const HOST = "localhost";
    private const USER = "root";
    private const PASS = "";
    private const DATABASE = "pagin";

    public static function connect(){
        return mysqli_connect(self::HOST, self::USER, self::PASS, self::DATABASE);
    }
    public static function query($query){
        $result = mysqli_query(self::connect(), $query);
        for($res =[]; $f = mysqli_fetch_assoc( $result );$res[] = $f );
        
        return $res;
    }
}