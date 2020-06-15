<?php

namespace Ap\controller;

use Ap\model\Product;

class Controller
{
    protected $product;

    public function __construct()
    {
        $this->product = new \Ap\model\ProductDB();
    }

    public function view()
    {
        $products = $this->product->getAll();
        include "src/view/list.php";
    }

    public function add()
    {

        if ($_SERVER['REQUEST_METHOD'] == 'GET') {
            include "src/view/add.php";
        } else {
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $product = new Product($name, $type, $price, $quantity, $description);
            $this->product->creat($product);
            header("location:index.php");
        }
    }

    public function deleteProduct($code)
    {
        $this->product->delete($code);
        header("location:index.php");
    }

    public function updateProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $id = $_GET['id'];
            $product = $this->product->get($id);
            include "src/view/update.php";
        } else {
            $id = $_REQUEST['id'];
            $name = $_REQUEST['name'];
            $type = $_REQUEST['type'];
            $price = $_REQUEST['price'];
            $quantity = $_REQUEST['quantity'];
            $description = $_REQUEST['description'];
            $product = new Product($name, $type, $price, $quantity, $description);
            $product->setCode($id);
            $this->product->update($product);
            header("location:index.php");
        }
    }

    public function searchProduct()
    {
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            include "src/view/search.php";
        } else {
            $search = $_POST["search"];
            if (empty($search)) {
                header("location:index.php");
            } else {
                $products = $this->product->search($search);
                include "src/view/search.php";
            }
        }
    }
}
