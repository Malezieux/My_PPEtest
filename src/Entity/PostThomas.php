<?php
namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use App\Repository\PostRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]


class PostThomas
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int $id;
    
    #[ORM\Column(length: 255)]
    private string $subject;
    
    #[ORM\Column(type: "text")]
    private string $text;
    
    #[ORM\Column(type: "datetime")]
    private \DateTime $createdDate;

    public function getId()
    {
        return $this->id;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }

    public function getText()
    {
        return $this->text;
    }
    public function setText($text)
    {
        $this->text = $text;
    }

    public function getCreatedDate()
    {
        return $this->createdDate->format('Y-m-d H:i:s');
    }
    public function setCreatedDate($date)
    {
        $this->createdDate = $date;
    }

}
