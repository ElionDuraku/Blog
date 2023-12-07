<?php
namespace Admin\Lib;

define("DB_HOST", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");
define("DB_NAME", "blog1");

require_once "config/config.php";

use PDO;
use PDOExcption;
use Throwable;
use ReflectionClass;

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

    private function properties()
        {
            $properties = array();
            foreach (static::$db_tables_fields as $db_field) {
                if (\property_exists($this, $db_field)) {
                    $properties[$db_field] = $this->{$db_field};
                }
        }
        return $properties;
    }

    public function getClassName(){
        $class_name = new ReflectionClass($this);
        return $class_name=ucfirst($class_name->getShortName());
    }



    public function find_all(){
        // $class_name=substr(self::$db_table,0,-1);
        $sql="SELECT * FROM " .static::$db_table;
        $stmt=$this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $stmt->fetchAll();   
    }


    public function find_id($id){
        // $class_name=substr(self::$db_table,0,-1);
        $this->id=$id;
        $sql="SELECT * FROM ". static::$db_table ." WHERE id=:id";
        $stmt=$this->prepare($sql);
        $stmt->bindParam(':id',$this->id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\{$this->getClassName()}");
        return $stmt->fetch();
    }
    
    

    public function create(){
        try {
            $proporties=$this->properties();
    
            $sql="INSERT INTO " . static::$db_table . "(" . implode(",",array_keys($proporties)) .")";
            $sql.="VALUES ('" . implode("','", array_values($proporties)) . "')";
    
            $stmt=$this->prepare($sql);
            $stmt->execute();
            echo "{$this->getClassName()} added successfully";
        } catch (PDOException $e) {
            die("Error during the registration proccess" . $e->getMessage());
        }
    }
    
    

    public function update(){
        try {
            $proporties=$this->properties();
            $proporties_pair=array();
            foreach ($proporties as $key => $value) {
                $proporties_pair[]="{$key}='{$value}'";
            }
            $sql="UPDATE ". static::$db_table . " SET ";
            $sql.=implode(", ", $proporties_pair);
            $sql.=" WHERE userid=:userid";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':userid',$this->userid);
            $stmt->execute();
            echo "{$this->getClassName()} modified successfully";
        } catch (PDOException $e) {
            die("Error during the modification proccess" . $e->getMessage());
        }  
    }
    

    public function delete() {
        try {
            $sql="DELETE FROM " . static::$db_table ." WHERE userid=:userid";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':userid',$this->id, PDO::PARAM_INT);
            $stmt->execute();
            echo "{$this->getClassName()} deleted successfully";
        } catch (PDOException $e) {
            die("Error during the deletion proccess" . $e->getMessage());
        }  
}




}
