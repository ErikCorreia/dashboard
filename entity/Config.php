<?php

namespace Entity;

use Core\DB\Super\SuperEntity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'config')]
class Config extends SuperEntity
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $id;

    #[ORM\Column(type: 'string', nullable: true)]
    protected $title;

    #[ORM\Column(type: 'text', nullable: true)]
    protected $description;

    #[ORM\Column(type: 'string', nullable: true)]
    protected $image;

    #[ORM\Column(type: 'text', nullable: true)]
    protected $google_analytics_metric_id;

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->$description = $description;
        return $this;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
        return $this;
    }
    public function getGoogleAnalyticsMetricId()
    {
        return $this->google_analytics_metric_id;
    }

    public function setGoogleAnalyticsMetricId($google_analytics_metric_id)
    {
        $this->google_analytics_metric_id = $google_analytics_metric_id;
        return $this;
    }
}
