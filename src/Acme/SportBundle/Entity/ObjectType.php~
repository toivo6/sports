<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="objecttypes")
	*/ 

class ObjectType {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	* @ORM\OneToMany(targetEntity="SportObject", mappedBy="type")
	*/
 protected $objects;

	/**
	* @ORM\OneToMany(targetEntity="Protocol", mappedBy="type")
	*/
 protected $protocols;

	/**
	* @ORM\OneToMany(targetEntity="Norm", mappedBy="type")
	*/
 protected $norms;

        /**
         * @ORM\Column(type="string", length=128)
         */
 protected $name;
        /**
         * @ORM\Column(type="string", length=512)
         */
 protected $info;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
        $this->protocols = new \Doctrine\Common\Collections\ArrayCollection();
        $this->norms = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set name
     *
     * @param string $name
     * @return ObjectType
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
     * Set info
     *
     * @param string $info
     * @return ObjectType
     */
    public function setInfo($info)
    {
        $this->info = $info;

        return $this;
    }

    /**
     * Get info
     *
     * @return string 
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Add objects
     *
     * @param \Acme\SportBundle\Entity\SportObject $objects
     * @return ObjectType
     */
    public function addObject(\Acme\SportBundle\Entity\SportObject $objects)
    {
        $this->objects[] = $objects;

        return $this;
    }

    /**
     * Remove objects
     *
     * @param \Acme\SportBundle\Entity\SportObject $objects
     */
    public function removeObject(\Acme\SportBundle\Entity\SportObject $objects)
    {
        $this->objects->removeElement($objects);
    }

    /**
     * Get objects
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getObjects()
    {
        return $this->objects;
    }

    /**
     * Add protocols
     *
     * @param \Acme\SportBundle\Entity\Protocol $protocols
     * @return ObjectType
     */
    public function addProtocol(\Acme\SportBundle\Entity\Protocol $protocols)
    {
        $this->protocols[] = $protocols;

        return $this;
    }

    /**
     * Remove protocols
     *
     * @param \Acme\SportBundle\Entity\Protocol $protocols
     */
    public function removeProtocol(\Acme\SportBundle\Entity\Protocol $protocols)
    {
        $this->protocols->removeElement($protocols);
    }

    /**
     * Get protocols
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProtocols()
    {
        return $this->protocols;
    }

    /**
     * Add norms
     *
     * @param \Acme\SportBundle\Entity\Norm $norms
     * @return ObjectType
     */
    public function addNorm(\Acme\SportBundle\Entity\Norm $norms)
    {
        $this->norms[] = $norms;

        return $this;
    }

    /**
     * Remove norms
     *
     * @param \Acme\SportBundle\Entity\Norm $norms
     */
    public function removeNorm(\Acme\SportBundle\Entity\Norm $norms)
    {
        $this->norms->removeElement($norms);
    }

    /**
     * Get norms
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getNorms()
    {
        return $this->norms;
    }
}
