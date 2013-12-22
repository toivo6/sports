<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="sportobjects")
	*/ 

class SportObject {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	 * @var Zone 
	 * @ORM\ManyToOne(targetEntity="SportZone", inversedBy="objects")
	 * @ORM\JoinColumn(name="zone_id", referencedColumnName="id")
	*/
 protected $zone;
	/**
	* @ORM\Column(type="integer")
	*/
 protected $zone_id;

        /**
	* @var Type
        * @ORM\ManyToOne(targetEntity="ObjectType", inversedBy="objects")
	* @ORM\JoinColumn(name="type_id", referencedColumnName="id")
        */
 protected $type;

	/**
	* @ORM\Column(type="integer")
	*/
 protected $type_id;

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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set zone_id
     *
     * @param integer $zoneId
     * @return SportObject
     */
    public function setZoneId($zoneId)
    {
        $this->zone_id = $zoneId;

        return $this;
    }

    /**
     * Get zone_id
     *
     * @return integer 
     */
    public function getZoneId()
    {
        return $this->zone_id;
    }

    /**
     * Set type_id
     *
     * @param integer $typeId
     * @return SportObject
     */
    public function setTypeId($typeId)
    {
        $this->type_id = $typeId;

        return $this;
    }

    /**
     * Get type_id
     *
     * @return integer 
     */
    public function getTypeId()
    {
        return $this->type_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return SportObject
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
     * @return SportObject
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
     * @return SportObject
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
     * @return SportObject
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
     * Set zone
     *
     * @param \Acme\SportBundle\Entity\SportZone $zone
     * @return SportObject
     */
    public function setZone(\Acme\SportBundle\Entity\SportZone $zone = null)
    {
        $this->zone = $zone;

        return $this;
    }

    /**
     * Get zone
     *
     * @return \Acme\SportBundle\Entity\SportZone 
     */
    public function getZone()
    {
        return $this->zone;
    }

    /**
     * Set type
     *
     * @param \Acme\SportBundle\Entity\ObjectType $type
     * @return SportObject
     */
    public function setType(\Acme\SportBundle\Entity\ObjectType $type = null)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return \Acme\SportBundle\Entity\ObjectType 
     */
    public function getType()
    {
        return $this->type;
    }
}
