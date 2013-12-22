<?php 

namespace Acme\SportBundle\Entity; 
use Doctrine\ORM\Mapping as ORM;
	/**
	* @ORM\Entity
	* @ORM\Table(name="protocols")
	*/ 

class Protocol {
	/**
	 * @ORM\Id
	 * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
	 */
 protected $id;

	/**
	* @ORM\OneToMany(targetEntity="Field", mappedBy="protocol")
	*/
 protected $fields;

	/**
	* @ORM\ManyToOne(targetEntity="ObjectType", inversedBy="protocols")
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
         * @ORM\Column(type="string", length=512)
         */
 protected $info;
        /**
        * @ORM\OneToMany(targetEntity="Norm", mappedBy="protocol")
        */
 protected $norms;
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->fields = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set type_id
     *
     * @param integer $typeId
     * @return Protocol
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
     * @return Protocol
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
     * @return Protocol
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
     * Add fields
     *
     * @param \Acme\SportBundle\Entity\Field $fields
     * @return Protocol
     */
    public function addField(\Acme\SportBundle\Entity\Field $fields)
    {
        $this->fields[] = $fields;

        return $this;
    }

    /**
     * Remove fields
     *
     * @param \Acme\SportBundle\Entity\Field $fields
     */
    public function removeField(\Acme\SportBundle\Entity\Field $fields)
    {
        $this->fields->removeElement($fields);
    }

    /**
     * Get fields
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * Set type
     *
     * @param \Acme\SportBundle\Entity\ObjectType $type
     * @return Protocol
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

    /**
     * Add norms
     *
     * @param \Acme\SportBundle\Entity\Norm $norms
     * @return Protocol
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
