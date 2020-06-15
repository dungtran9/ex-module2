<?php


namespace Ap\model;


class Product
{
    protected $code;
    protected $name;
    protected $type;
    protected $price;
    protected $quantity;
    protected $creatdate;
    protected $description;

    public function __construct($name, $type, $price, $quantity, $description)
    {
        $this->name = $name;
        $this->type = $type;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->description = $description;
    }

    /**
     * @param mixed $creatdate
     */
    public function setCreatdate($creatdate)
    {
        $this->creatdate = $creatdate;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getCreatdate()
    {
        return $this->creatdate;
    }

    /**
     * @return mixed
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }
}