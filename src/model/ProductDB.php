<?php
namespace Ap\model;

class ProductDB
{
    protected $database;
    public function __construct()
    {
        $db=new DBconnext();
        $this->database=$db->connect();
    }

    public function getAll()
    {
        $sql = "SELECT * FROM products ";
        $stmt = $this->database->query($sql);
        return $stmt->fetchAll();
    }
    public function creat($product)
    {
        $sql = "INSERT INTO `products`(`code`, `name`, `type`, `price`, `quantity`,`description`) VALUES (?,?,?,?,?,?)";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->getCode());
        $stmt->bindParam(2, $product->getName());
        $stmt->bindParam(3, $product->getType());
        $stmt->bindParam(4, $product->getPrice());
        $stmt->bindParam(5, $product->getQuantity());
        $stmt->bindParam(6, $product->getDescription());
        $stmt->execute();
    }
    public function delete($code)
    {
        $sql = "DELETE FROM products WHERE code = :code";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":code", $code);
        $stmt->execute();
    }
    public function get($id)
    {
        $sql = "SELECT * FROM products WHERE code= :id";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(":id", $id);
        $stmt->execute();
        return $stmt->fetch();
    }
    public function update($product)
    {
        $sql = "UPDATE `products` SET name= ?,type= ?,price= ?,quantity= ?,description= ? WHERE code = ?";
        $stmt = $this->database->prepare($sql);
        $stmt->bindParam(1, $product->getName());
        $stmt->bindParam(2, $product->getType());
        $stmt->bindParam(3, $product->getPrice());
        $stmt->bindParam(4, $product->getQuantity());
        $stmt->bindParam(5, $product->getDescription());
        $stmt->bindParam(6, $product->getCode());
        $stmt->execute();
    }
    public function search($key)
    {
        $sql = "SELECT * FROM `products` WHERE `name` LIKE :keyword";
        $stmt = $this->database->prepare($sql);
        $stmt->bindValue(":keyword", '%' . $key . '%');
        $stmt->execute();
        return ($stmt->fetchAll());
    }
}