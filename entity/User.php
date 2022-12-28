<?php 

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

#[ORM\Entity]
#[ORM\Table(name: 'users')]
class User
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $id;

    #[ORM\Column(type:'string')]
    protected $username;

    #[ORM\Column(type:'string')]
    protected $password;

    #[ORM\Column(type:'string')]
    protected $email;

    #[ORM\Column(type:'string')]
    protected $roles;

    #[ORM\JoinTable(name: 'user_modules')]
    #[ORM\JoinColumn(name: 'user_id', referencedColumnName: 'id')]
    #[ORM\InverseJoinColumn(name: 'module_id', referencedColumnName: 'id')]
    #[ORM\ManyToMany(targetEntity: UserModule::class)]
    protected $modules;

    public function __construct()
    {
        $this->modules = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function setUsername($username)
    {
        $this->username = $username;
        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }
    public function setPassword($password)
    {
        $this->password = $password;
        return $this;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }
    public function getRole()
    {
        return $this->roles;
    }
    public function setRole($roles)
    {
        $this->roles = $roles;
        return $this;
    }
    public function getModules()
    {
        return $this->modules;
    }

    public function addModule(UserModule $module)
    {
        $this->modules[] = $module;
        return $this;
    }
    public function removeModule(UserModule $module)
    {
        $this->modules->removeElement($module);
        return $this;
    }
    public function hasModule(UserModule $module)
    {
        return $this->modules->contains($module);
    }
    public function getModule(UserModule $module)
    {
        return $this->modules->toArray($module);
    }
    public function setModule(UserModule $module)
    {
        $this->modules[] = $module;
        return $this;
    }
}
