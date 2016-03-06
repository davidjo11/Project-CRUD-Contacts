<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Region", inversedBy="cities")
     * @ORM\JoinColumn(name="region_id", referencedColumnName="id")
     */
    private $region;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\City", mappedBy="city")
     */
    private $citizen;

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
     * Set name
     *
     * @param string $name
     *
     * @return City
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
     * Set region
     *
     * @param \AppBundle\Entity\Region $region
     *
     * @return City
     */
    public function setRegion(\AppBundle\Entity\Region $region = null)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * Get region
     *
     * @return \AppBundle\Entity\Region
     */
    public function getRegion()
    {
        return $this->region;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->citizen = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add citizen
     *
     * @param \AppBundle\Entity\City $citizen
     *
     * @return City
     */
    public function addCitizen(\AppBundle\Entity\City $citizen)
    {
        $this->citizen[] = $citizen;

        return $this;
    }

    /**
     * Remove citizen
     *
     * @param \AppBundle\Entity\City $citizen
     */
    public function removeCitizen(\AppBundle\Entity\City $citizen)
    {
        $this->citizen->removeElement($citizen);
    }

    /**
     * Get citizen
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCitizen()
    {
        return $this->citizen;
    }
}
