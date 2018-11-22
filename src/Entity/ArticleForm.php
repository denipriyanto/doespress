<?php

namespace App\Entity;

class ArticleForm
{
    protected $title;
    protected $content;
    protected $tag;
    protected $category;
    protected $featuredImage;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content =  $content;
    }

    public function getTag()
    {
        return $this->tag;
    }

    public function setTag($tag)
    {
        $this->tag = explode(' ',$tag);
    }

    public function getFeaturedImage()
    {
        return $this->featuredImage;
    }
    public function setFeaturedImage($featuredImage)
    {
        $this->featuredImage = $featuredImage;
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