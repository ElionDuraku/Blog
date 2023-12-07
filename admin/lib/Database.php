<?php
namespace Admin\Lib;

require_once "config/config.php";

use PDO;
use Throwable;

class Database
{

    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbname = DB_NAME;

    public function __construct()
    {
        $this->connectDB();
    }

    private function connectDB()
    {
        try {
            $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->dbname;
            $pdo = new PDO($dsn, $this->user, $this->pass);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Throwable $e) {
            echo "Lidhja me bazen e shenimeve deshtoi " . $e->getMessage();
        }
    }

    public function prepare($sql){
        return $this->connectDB()->prepare($sql);
    }


}
