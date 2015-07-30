<?php

namespace Youshido\SettingsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SiteSetting
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Youshido\SettingsBundle\Entity\Repository\SiteSettingRepository")
 */
class SiteSetting
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
     * @var string
     *
     * @ORM\Column(name="parameter", type="string", length=255, unique=true)
     */
    private $parameter;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=1000)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255, nullable=true)
     */
    private $value;

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
     * Set parameter
     *
     * @param string $parameter
     * @return SiteSetting
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get parameter
     *
     * @return string 
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set totle
     *
     * @param string $title
     * @return SiteSetting
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get totle
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set value
     *
     * @param string $value
     * @return SiteSetting
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string 
     */
    public function getValue()
    {
        return $this->value;
    }
}
