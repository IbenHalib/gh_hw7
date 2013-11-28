<?php

namespace Vadim\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mails
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Mails
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @return mixed
     */
    public function getMailText()
    {
        return $this->mailText;
    }

    /**
     * @param mixed $mailText
     */
    public function setMailText($mailText)
    {
        $this->mailText = $mailText;
    }

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $mailText;

    /**
     * @ORM\Column(type="string", length=100)
     */
    protected $mane;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getMane()
    {
        return $this->mane;
    }

    /**
     * @param mixed $mane
     */
    public function setMane($mane)
    {
        $this->mane = $mane;
    }



}
