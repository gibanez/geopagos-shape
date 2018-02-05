<?php
namespace AppBundle\Shapes;

/*
 * $circle = $this->get('app.ShapeFactory')->Create('Circle', null, null, 10);
        $square = $this->get('app.ShapeFactory')->Create('Square', 10, 10, null);
        $triangle = $this->get('app.ShapeFactory')->Create('Triangle', 15, 10, null);
 */

class ShapeFactory
{
    public static function create($type, $base = null, $height = null, $diameter = null)
    {
        switch ($type) {
            case 'Circle':
                return new Circle($diameter);
                break;
            case 'Square':
                return new Square($base, $height);
                break;
            case 'Triangle':
                return new Triangle($base, $height);
                break;
            default:
                throw new \Exception("Invalid Type");
                break;
        }
    }

    /**
     * @param $base
     * @param $height
     * @return Triangle
     * @throws \Exception
     */
    public static function createTriangle($base, $height)
    {
        return self::create('Triangle', $base, $height);
    }

    /**
     * @param $diameter
     * @return Circle
     * @throws \Exception
     */
    public static function createCircle($diameter)
    {
        return self::create('Circle', null, null, $diameter);
    }

    /**
     * @param $base
     * @param $height
     * @return Square
     * @throws \Exception
     */
    public static function createSquare($base)
    {
        $height = $base;
        return self::create('Square', $base, $height);
    }

}