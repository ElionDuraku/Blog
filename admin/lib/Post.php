<?php

namespace Admin\Lib;

use PDO;

class Post extends Database
{
    private $postid;
    private $categoryid;
    private $title;
    private $content;
    private $author;
    private $image_url;
    private $tags;
    private $data;

    public function getPostid(){
        return $this->postid;
    }

    public function setPostid($postid){
        $this->postid = $postid;
    }

    public function getCategoryId(){
        return $this->categoryid;
    }

    public function setCategoryId($categoryid){
        $this->categoryid = $categoryid;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getContent(){
        return $this->content;
    }

    public function setContent($content){
        $this->content = $content;
    }

    public function getAuthor(){
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

    public function getImageUrl(){
        return $this->image_url;
    }

    public function setImageUrl($image_url){
        $this->image_url = $image_url;
    }

    public function getTags(){
        return $this->tags;
    }

    public function setTags($tags){
        $this->tags = $tags;
    }

    public function getData(){
        return $this->data;
    }

    public function setData($data){
        $this->data = $data;
    }
    
    public function find_all_posts()
    {
        $sql = "SELECT * FROM posts";
        $stmt = $this->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Post");
        return $stmt->fetchAll();

    }

    public function find_post_id($postid)
    {
        $this->postid = $postid;
        $sql = "SELECT * FROM posts WHERE postid=:postid";
        $stmt = $this->prepare($sql);
        $stmt->bindParam(':postid', $this->postid);
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_CLASS, __NAMESPACE__ . "\\Post");
        return $stmt->fetch();
    }

    // public function create_post(){
    //     try {
    //         $sql = "INSERT INTO posts( title, content, author, , tags, data) VALUES ";
    //         $sql .= "( :title, :content, :author, :tags, :data)";
    //         $stmt = $this->prepare($sql);
    //         $stmt->bindParam(':categoryid', $this->categoryid);
    //         $stmt->bindParam(':title', $this->title);
    //         $stmt->bindParam(':content', $this->content);
    //         $stmt->bindParam(':author', $this->author);
    //         $stmt->bindParam(':image_url', $this->image_url);
    //         $stmt->bindParam(':tags', $this->tags);
    //         $stmt->bindParam(':data', $this->data);
    //         $stmt->execute();
    //         echo "Post added successfully";
    //     } catch(PDOException $e) {
    //         echo "Error in post creation process " . $e->getMessage();
    //     }
    // }

    public function create_post(){
        try {
            $sql = "INSERT INTO posts (title, content, author, tags, data) VALUES (:title, :content, :author, :tags, :data)";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':content', $this->content);
            $stmt->bindParam(':author', $this->author);
            $stmt->bindParam(':tags', $this->tags);
            $stmt->bindParam(':data', $this->data);
            $stmt->execute();
            echo "Post added successfully";
        } catch(PDOException $e) {
            echo "Error in post creation process " . $e->getMessage();
        }
    }
    

    public function update_post(){
        try {
            $sql = "UPDATE posts SET categoryid=:categoryid, title=:title, content=:content, ";
            $sql .= "author=:author, image_url=:image_url, tags=:tags, data=:data WHERE postid=:postid";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':postid', $this->postid);
            $stmt->bindParam(':categoryid', $this->categoryid);
            $stmt->bindParam(':title', $this->title);
            $stmt->bindParam(':content', $this->content);
            $stmt->bindParam(':author', $this->author);
            $stmt->bindParam(':image_url', $this->image_url);
            $stmt->bindParam(':tags', $this->tags);
            $stmt->bindParam(':data', $this->data);
            $stmt->execute();
            echo "Post updated successfully";
        } catch(PDOException $e) {
            echo "Error in post update process " . $e->getMessage();
        }
    }

    public function delete_post(){
        try {
            $sql = "DELETE FROM posts WHERE postid=:postid";
            $stmt = $this->prepare($sql);
            $stmt->bindParam(':postid', $this->postid, PDO::PARAM_INT);
            $stmt->execute();
            echo "Post deleted successfully";
        } catch(PDOException $e) {
            echo "Error in post deletion process " . $e->getMessage();
        }
    }

}