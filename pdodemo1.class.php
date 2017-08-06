<?php
/**
 * Created by PhpStorm.
 * User: kaycn
 * Date: 17-8-5
 * Time: 下午5:42
 */

/*
  *
  * PDO mysql类，操作 版本1.0
  *
  * */

class Pdodome{
    function __construct($sql)
    {
        $this -> sql =$sql;
    }
    protected $dsn = "mysql:host=localhost;dbname=KaycnCom";
    protected $user = "root";
    protected $password = "root19960521";


    protected function connect(){
        $pdo = new PDO($this->dsn, $this->user, $this->password);
        return $pdo;
    }

    protected function log($e){

        $handle = "log1.txt";

        if(is_object($e))
        {

        // $handle = fopen("log.txt", "w")
        $err = date("Y-M-d h:i:sa") . $e->getMessage();

       }
       else {
        $err = date("Y-M-d h:i:sa") ."sucseefuly";
        }

        file_put_contents($handle, $err . "\n", FILE_APPEND);
    }

    public function exe(){
        try{
            $pdo = $this ->connect();

            $pdo -> exec($this->sql);

            $this -> log();
        }
        catch (PDOException $e){
            $this -> log($e);
        }
    }
}