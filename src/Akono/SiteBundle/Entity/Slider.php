<?php

namespace Akono\SiteBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="`slider`")
 * @ORM\Entity(repositoryClass="Akono\SiteBundle\Entity\Repository\PortfolioRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Slider
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $title;

    /**
     * @ORM\Column(type="string")
     */
    protected $image;

    /**
     * @ORM\Column(type="date")
     */
    protected $startDate;

    /**
     * @ORM\Column(type="date")
     */
    protected $endDate;

    /**
     * @ORM\Column(type="text")
     */
    protected $body;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }


    public function getStartDate()
    {
        return $this->startDate;
    }

    public function setStartDate($date)
    {
        $this->startDate = $date;
    }

    public function getEndDate()
    {
        return $this->endDate;
    }

    public function setEndDate($date)
    {
        $this->endDate = $date;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function setBody($text)
    {
        $this->body = $text;
    }
}
