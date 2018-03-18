<?php


class Box
{
    private $length;
    private $width;
    private $height;

    public function __construct($length, $width, $height)
    {
        $this->length = $length;
        $this->width = $width;
        $this->height = $height;
    }

    public function getLength()
    {
        return $this->length;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function getHeight()
    {
        return $this->height;
    }


    public function surfaceArea()
    {
        $result = (2 * $this->getLength() * $this->getWidth())
            + (2 * $this->getLength() * $this->getHeight())
            + (2 * $this->getWidth() * $this->getHeight());
        return "Surface Area - " . number_format($result, 2, '.', '');
    }

    public function lateralSurfaceArea()
    {
        $result = (2 * $this->getLength() * $this->getHeight())
            + (2 * $this->getWidth() * $this->getHeight());
        return "Lateral Surface Area - " . number_format($result, 2, '.', '');
    }

    public function volume()
    {
        $result = $this->getLength() * $this->getHeight() * $this->getWidth();
        return "Volume - " . number_format($result, 2, '.', '');
    }

    public function __toString()
    {
        return $this->surfaceArea() . PHP_EOL . $this->lateralSurfaceArea() . PHP_EOL . $this->volume();
    }


}

$length = trim(fgets(STDIN));
$width = trim(fgets(STDIN));
$height = trim(fgets(STDIN));

$box = new Box($length, $width, $height);

echo $box;

