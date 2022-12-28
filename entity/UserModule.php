<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
class UserModule 
{
    #[ORM\Id]
    #[ORM\Column(name: 'id', type: 'integer')]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    protected $id;

    #[ORM\Column(name: 'name', type:'string')]
    protected $name;

    #[ORM\Column(name: 'slug', type:'string')]
    protected $slug;

    #[ORM\Column(name: 'description', type: 'text')]
    protected $description;


    // #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'modules')]
    // #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    // protected $user;

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function getSlug()
    {
        return $this->slug;
    }
    public function setSlug($slug)
    {
        $this->slug = $slug;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
    
    public function getUrl()
    {
        return '/'.$this->slug;
    }
}
