<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="sportzones")
	*/ 

class SportZone {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	 * @var Client
	 * @ORM\ManyToOne(targetEntity="Client", inversedBy="zones")
	 * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
	*/
 protected $client;
	/**
	* @ORM\Column(type="integer")
	*/
 protected $client_id;

        /**
        * @ORM\OneToMany(targetEntity="SportObject", mappedBy="zone")
        */
 protected $objects;

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
        $this->objects = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set client_id
     *
     * @param integer $clientId
     * @return SportZone
     */
    public function setClientId($clientId)
    {
        $this->client_id = $clientId;

        return $this;
    }

    /**
     * Get client_id
     *
     * @return integer 
     */
    public function getClientId()
    {
        return $this->client_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SportZone
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
     * @return SportZone
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
     * @return SportZone
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
     * @return SportZone
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
     * Set client
     *
     * @param \Acme\SportBundle\Entity\Client $client
     * @return SportZone
     */
    public function setClient(\Acme\SportBundle\Entity\Client $client = null)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return \Acme\SportBundle\Entity\Client 
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Add objects
     *
     * @param \Acme\SportBundle\Entity\SportObject $objects
     * @return SportZone
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
}
