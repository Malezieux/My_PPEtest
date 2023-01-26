<?php
// src/Entity/Post.php
namespace App\Entity;

use Symphony\Component\Validator\Constraints as Assert;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]

class Post
{
    #[ORM\Id]
    #[ORM\GenerateValue]
    #[ORM\Column]
    private int $id;

    #[ORM\Column(length: 255)]
    private $subject;   

    #[ORM\Column(type: "text")]
    private $texte;

  

    #[ORM\Column(type: "datetime")]
    private \DateTime $createdate;

    
    public function getSubject()
    {
        return $this->subject;
    }
    public function setSubject($subject)
    {
        $this->Subject = $subject;
    }
    
    public function getTexte()
    {
        return $this->texte;
    }
    public function setTexte($texte)
    {
        $this->texte = $texte;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getCreateDate()
    {
        $this->createdate = $createdate;

    }
    public function setCreateDate()
    {
        return $this->$createdate;
    }

}
