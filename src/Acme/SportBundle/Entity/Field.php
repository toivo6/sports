<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="fields")
	*/ 

class Field {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	* @ORM\OneToMany(targetEntity="Value", mappedBy="field")
	*/
 protected $values;

	/**
	* @ORM\ManyToOne(targetEntity="Protocol", inversedBy="fields")
	* @ORM\JoinColumn(name="protocol_id", referencedColumnName="id")
	*/
 protected $protocol;

	/**
	* @ORM\Column(type="integer")
	*/
 protected $protocol_id;

        /**
         * @ORM\Column(type="string", length=128)
         */
 protected $name;
	/**
	* @ORM\Column(type="string", length=32)
	*/
 protected $description;
 
       /**
         * @ORM\Column(type="integer")
         */
 protected $count;
	
	/**
	* @ORM\Column(type="string")
	*/
 protected $unit;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->values = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set protocol_id
     *
     * @param integer $protocolId
     * @return Field
     */
    public function setProtocolId($protocolId)
    {
        $this->protocol_id = $protocolId;

        return $this;
    }

    /**
     * Get protocol_id
     *
     * @return integer 
     */
    public function getProtocolId()
    {
        return $this->protocol_id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Field
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
     * Set description
     *
     * @param string $description
     * @return Field
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set count
     *
     * @param integer $count
     * @return Field
     */
    public function setCount($count)
    {
        $this->count = $count;

        return $this;
    }

    /**
     * Get count
     *
     * @return integer 
     */
    public function getCount()
    {
        return $this->count;
    }

    /**
     * Set unit
     *
     * @param string $unit
     * @return Field
     */
    public function setUnit($unit)
    {
        $this->unit = $unit;

        return $this;
    }

    /**
     * Get unit
     *
     * @return string 
     */
    public function getUnit()
    {
        return $this->unit;
    }

    /**
     * Add values
     *
     * @param \Acme\SportBundle\Entity\Value $values
     * @return Field
     */
    public function addValue(\Acme\SportBundle\Entity\Value $values)
    {
        $this->values[] = $values;

        return $this;
    }

    /**
     * Remove values
     *
     * @param \Acme\SportBundle\Entity\Value $values
     */
    public function removeValue(\Acme\SportBundle\Entity\Value $values)
    {
        $this->values->removeElement($values);
    }

    /**
     * Get values
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * Set protocol
     *
     * @param \Acme\SportBundle\Entity\Protocol $protocol
     * @return Field
     */
    public function setProtocol(\Acme\SportBundle\Entity\Protocol $protocol = null)
    {
        $this->protocol = $protocol;

        return $this;
    }

    /**
     * Get protocol
     *
     * @return \Acme\SportBundle\Entity\Protocol 
     */
    public function getProtocol()
    {
        return $this->protocol;
    }
}
