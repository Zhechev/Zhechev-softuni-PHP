<?php


class Book
{
    private $title;
    private $author;
    private $price;


    public function __construct($title, $author, $price)
    {
        $this->setTitle($title);
        $this->setAuthor($author);
        $this->setPrice($price);
    }

    public function setAuthor($author)
    {
        $authorsParts = explode(' ', trim($author));
        if (is_numeric($authorsParts[1][0])){
            throw new Exception("Author not valid!");
        }
        else {
            $this->author = $author;
        }
    }



    public function setTitle($title)
    {
        if (strlen($title) < 3) {
            throw new Exception("Title not valid!");
        }
        else {
            $this->title = $title;
        }
    }


    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }


    public function setPrice($price)
    {
        if ($price < 0){
            throw new Exception("Price not valid!");
        }
        else {
            $this->price = $price;
        }
    }

    public function __toString()
    {
        return "OK" . PHP_EOL . $this->getPrice();
    }

}

class GoldenEditBook extends Book
{
    public function getPrice()
    {
        return parent::getPrice() * 1.30;
    }
}





try {
    $author = trim(fgets(STDIN));
    $title = trim(fgets(STDIN));
    $price = floatval(trim(fgets(STDIN)));
    $type = trim(fgets(STDIN));
    if ($type == "STANDARD"){
        $book = new Book($title, $author, $price);
    } else if ($type == "GOLD"){
        $book = new GoldenEditBook($title, $author, $price);
    } else {
        throw new Exception("Type is not valid!");
    }

    echo $book;
} catch (Exception $ex){
    echo $ex->getMessage();
}




