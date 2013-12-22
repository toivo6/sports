<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="clients")
	*/ 

class Client {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	* @ORM\OneToMany(targetEntity="SportZone", mappedBy="client")
	*/
 protected $zones;
	/**
	 * @ORM\Column(type="string", length=128)
	 */
 protected $name;
        /**
         * @ORM\Column(type="string", length=128)
         */
 protected $adress;
        /**
         * @ORM\Column(type="string", length=128)
         */
 protected $contacts;
        /**
         * @ORM\Column(type="string", length=512)
         */
 protected $info;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->zones = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return Client
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
     * Set adress
     *
     * @param string $adress
     * @return Client
     */
    public function setAdress($adress)
    {
        $this->adress = $adress;

        return $this;
    }

    /**
     * Get adress
     *
     * @return string 
     */
    public function getAdress()
    {
        return $this->adress;
    }

    /**
     * Set contacts
     *
     * @param string $contacts
     * @return Client
     */
    public function setContacts($contacts)
    {
        $this->contacts = $contacts;

        return $this;
    }

    /**
     * Get contacts
     *
     * @return string 
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Set info
     *
     * @param string $info
     * @return Client
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
     * Add zones
     *
     * @param \Acme\SportBundle\Entity\SportZone $zones
     * @return Client
     */
    public function addZone(\Acme\SportBundle\Entity\SportZone $zones)
    {
        $this->zones[] = $zones;

        return $this;
    }

    /**
     * Remove zones
     *
     * @param \Acme\SportBundle\Entity\SportZone $zones
     */
    public function removeZone(\Acme\SportBundle\Entity\SportZone $zones)
    {
        $this->zones->removeElement($zones);
    }

    /**
     * Get zones
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getZones()
    {
        return $this->zones;
    }
}
