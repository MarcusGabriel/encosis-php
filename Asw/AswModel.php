<?php

namespace Asw;

use Acme\Interfaces\Imodel;
use Asw\Database\Connection;

class AswModel implements Imodel{
    private $database;
    public function __construct(){
        $this->database = Connection::getConnection();
    }
    public function create(){
        try{
            $query = "INSERT INTO $this->table(name,email) VALUES(:name, :email)";
            $stmt = $this->database->prepare($query);
            $stmt->bindValue(':name', $this->getName());
            $stmt->bindValue(':email', $this->getEmail());
            $stmt->execute();
        }catch(Exception $e){
            var_dump($e->getMessage());
        }
    }

    public function read(){
        try{
            $sql = "SELECT * FROM $this->table";
            $stmt = $this->database->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_OBJ);
            
        }catch(PDOException $e){
            var_dump($e->getMessage());
        }
    }

    public function update($id){
        $sql = "UPDATE users set name=:name, email=:email where id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":name", $this->getName());
        $stmt->bindValue(":email",$this->getEmail());
        $stmt->bindParam(":id",$id);
        $stmt->execute();
        return $stmt->rowCount();
    }

    public function delete($id){
        $stmt = $this->database->prepare("DELETE FROM users WHERE id=:id");
        $stmt->bindParam(":id",$id);
        $stmt->execute();
    }

    public function findBy($id){
        $sql = "SELECT * FROM $this->table WHERE id=:id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_OBJ);
    }
}