<?php

namespace Admin\Lib;

require_once "Database.php";
use PDO;
use PDOException;

class User extends Database{
    private $userid;
    private $firstname;
    private $lastname;
    private $phone;
    private $email;
    private $password;


    public function getUserid(){
        return $this->userid;
    }

    public function setUserid($userid){
        $this->userid=$userid;
    }


    public function getFirstname(){
        return $this->firstname;
    }

    public function setFirstname($firstname){
        $this->firstname=$firstname;
    }

    
    public function getLastname(){
        return $this->lastname;
    }

    public function setLastname($lastname){
        $this->lastname=$lastname;
    }

    
    public function getPhone(){
        return $this->phone;
    }

    public function setPhone($phone){
        $this->phone=$phone;
    }

    
    public function getEmail(){
        return $this->email;
    }
    
    public function setEmail($email){
        $this->email=$email;
    }

    
    public function getPassword(){
        return $this->password;
    }
    
    public function setPassword($password){
        $this->password=$password;
    }


    public function find_all_users()
    {
        $sql = "SELECT * FROM users";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\User");
        return $stmt->fetchAll();
    }

    public function find_user_id($userid){
        $this->userid = $userid;
        $sql="SELECT * FROM users";
        $sql.=" WHERE userid=:userid";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':userid',$this->userid);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\User");
        return $stmt->fetch();
    }

    public function create_user(){
        try{        
            $sql="INSERT INTO users(firstname,lastname,phone,email,password) VALUES ";
            $sql.="(:firstname,:lastname,:phone,:email,:password)";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':firstname',$this->firstname);
            $stmt->bindParam(':lastname',$this->lastname);
            $stmt->bindParam(':phone',$this->phone);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':password',$this->password);
            $stmt->execute();
            echo "User added successfully";
        }
        catch(PDOException $e){
            echo "Error in user registration process " . $e->getMessage();
        }
    }


    public function update_user(){
        try{
            $sql="UPDATE users SET firstname=:firstname, lastname=:lastname, ";
            $sql.="phone=:phone, email=:email, password=:password WHERE userid=:userid";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':userid',$this->userid);
            $stmt->bindParam(':firstname',$this->firstname);
            $stmt->bindParam(':lastname',$this->lastname);
            $stmt->bindParam(':phone',$this->phone);
            $stmt->bindParam(':email',$this->email);
            $stmt->bindParam(':password',$this->password);
            $stmt->execute();
            echo "User modified successfully";
        }
        catch(PDOException $e){
            echo "Error in user modification process " . $e->getMessage();
        }
    }


    public function delete_user(){
       try{        
            $sql="DELETE FROM users WHERE userid=:userid";
            $stmt=$this->prepare($sql);
            $stmt->bindParam(':userid', $this->userid, PDO::PARAM_INT);
            $stmt->execute();
            echo "User deleted successfully";
        }
        catch(PDOException $e){
            echo "Error in user deletion process " . $e->getMessage();
        }
    }
    

}