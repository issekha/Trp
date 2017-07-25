<?php

namespace Trp\MdlBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tckt
 *
 * @ORM\Table(name="tckt")
 * @ORM\Entity(repositoryClass="Trp\MdlBundle\Repository\TcktRepository")
 */
class Tckt
{
	/**
	 * @ORM\ManyToOne(targetEntity="Trp\MdlBundle\Entity\Cmd")
	 * @ORM\JoinColumn(nullable=false)
   	 */
	private $cmd;
	
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
     * @ORM\Column(name="fname", type="string", length=50)
     */
    private $fname;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=50)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Column(name="rate", type="integer")
     */
    private $rate;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=50)
     */
    private $country;
	
	/**
     * @var string
     *
     * @ORM\Column(name="ttype", type="string", length=50)
     */
    private $ttype;

	public function __construct()
	{
		$this->date = new \Datetime();
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
     * Set fname
     *
     * @param string $fname
     *
     * @return Tckt
     */
    public function setFname($fname)
    {
        $this->fname = $fname;

        return $this;
    }

    /**
     * Get fname
     *
     * @return string
     */
    public function getFname()
    {
        return $this->fname;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tckt
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Tckt
     */
    public function setDate(\Datetime $date)
    {
        $this->date = $date;

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
     * Set rate
     *
     * @param integer $rate
     *
     * @return Tckt
     */
    public function setRate($rate)
    {
        $this->rate = $rate;

        return $this;
    }

    /**
     * Get rate
     *
     * @return int
     */
    public function getRate()
    {
        return $this->rate;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return Tckt
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }
	
	/**
     * Set cmd
     *
     * @param Cmd $cmd
     *
     */
    public function setCmd(Cmd $cmd)
    {
        $this->cmd = $cmd;
		return $this;
    }

    /**
     * Get cmd
     *
     * @return Cmd
     */
    public function getCmd()
    {
        return $this->cmd;
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

