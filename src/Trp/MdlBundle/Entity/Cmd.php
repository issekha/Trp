<?php

namespace Trp\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Cmd
 *
 * @ORM\Table(name="cmd")
 * @ORM\Entity(repositoryClass="Trp\MdlBundle\Repository\CmdRepository")
 */
class Cmd
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50)
     */
    private $email;
	
	/**
     * @var int
     *
     * @ORM\Column(name="tnbrs", type="integer")
     */
    private $tnbrs;

    /**
     * @var array
     *
     * @ORM\Column(name="allin", type="array")
     */
    private $allIn;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ttype", type="string", length=50)
     */
    private $ttype;
	
	
	public function __construct()
	{
		$this->date		= new \Datetime();
		
	}

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cmd
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set allIn
     *
     * @param array $allIn
     *
     * @return Cmd
     */
    public function setallIn($allIn)
    {
        $this->allIn = $allIn;

        return $this;
    }

    /**
     * Get allIn
     *
     * @return array
     */
    public function getallIn()
    {
        return $this->allIn;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Cmd
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
	/**
     * Set tnbrs
     *
     * @param integer $tnbrs
     *
     * @return Tckt
     */
    public function setTnbrs($tnbrs)
    {
        $this->tnbrs = $tnbrs;

        return $this;
    }

    /**
     * Get tnbrs
     *
     * @return int
     */
    public function getTnbrs()
    {
        return $this->tnbrs;
    }
	
	/**
     * Set ttype
     *
     * @param string $ttype
     *
     * @return Tckt
     */
    public function setTtype($ttype)
    {
        $this->ttype = $ttype;

        return $this;
    }

    /**
     * Get ttype
     *
     * @return string
     */
    public function getTtype()
    {
        return $this->ttype;
    }
}

