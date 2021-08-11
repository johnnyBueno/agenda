<?php 

namespace Source\Core;

use \PDO;
use \PDOException;

class Connect
{
    private static $instance;
    public function getInstance()
    {
        if(empty(self::$instance))
        {
            try{
                self::$instance = new PDO(
                    "mysql:host=" .CONF_DB_HOST. ";dbname=" .CONF_DB_NAME,
                    CONF_DB_USER,
                    CONF_DB_PASS
                );
            }catch(\PDOException $exception){
                die("Falha ao conectar");
            }
        }
    }
}