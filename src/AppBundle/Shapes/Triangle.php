<?php
namespace AppBundle\Shapes;

class Triangle extends Shape
{
    public function __construct($base, $height)
    {
        parent::__construct('Triangle', $base, $height, null);
    }
    public function getArea(){
        return ($this->getBase() * $this->getHeight()) / 2;
    }
}