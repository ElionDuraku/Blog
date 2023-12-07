<?php

namespace Admin\Lib;

require_once "Database.php";
use PDO;
use PDOException;

class Category extends Database
{
    private $categoryid;
    private $name;
    private $description;

    public function getCategoryid(){
        return $this->categoryid;
    }

    public function setCategoryid($categoryid){
        $this->categoryid = $categoryid;
    }

    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getDescription(){
        return $this->description;
    }

    public function setDescription($description){
        $this->description = $description;
    }

    public function find_all_categories(){
        $sql = "SELECT * FROM categories";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Category");
        return $stmt->fetchAll();

    }

    public function find_category_id($id){
        $this->id = $id;
        $sql = "SELECT * FROM categories WHERE categoryid=:id";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':id', $this->id);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Category");
        return $stmt->fetch();
    }


        public function create_category(){
        try {
            $sql = "INSERT INTO categories(name, description) VALUES (:name, :description)";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->execute();
            echo "Category added successfully";
        } catch(PDOException $e) {
            echo "Error in category creation process " . $e->getMessage();
        }
    }

    public function update_category(){
        try {
            $sql = "UPDATE categories SET name=:name, description=:description WHERE categoryid=:categoryid";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':categoryid', $this->categoryid);
            $stmt->bindParam(':name', $this->name);
            $stmt->bindParam(':description', $this->description);
            $stmt->execute();
            echo "Category modified successfully";
        } catch(PDOException $e) {
            echo "Error in category modification process " . $e->getMessage();
        }
    }

    public function delete_category(){
        try {
            $sql = "DELETE FROM categories WHERE categoryid=:categoryid";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':categoryid', $this->categoryid, PDO::PARAM_INT);
            $stmt->execute();
            echo "Category deleted successfully";
        } catch(PDOException $e) {
            echo "Error in category deletion process " . $e->getMessage();
        }
    }

}