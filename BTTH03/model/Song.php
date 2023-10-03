<?php
class Song
{
    private $id;
    private $title;
    private $category;

    public function __construct($id, $title, $category)
    {
        $this->id = $id;
        $this->title = $title;
        $this->category = $category;
    }

    // Getter và Setter cho các thuộc tính

    public function getId()
    {
        return $this->id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }
}
?>