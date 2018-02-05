<?php
namespace AppBundle\Shapes;

interface ShapeInterface
{
    public function getType();
    public function getBase();
    public function getArea();
    public function getHeight();
    public function getDiameter();
}