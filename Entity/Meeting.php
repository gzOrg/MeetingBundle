<?php

namespace Synergie\MeetingBundle\Entity;

/**
 * @orm:Entity
 */
class Meeting
{
  /**
   * @orm:Id
   * @orm:Column(type="integer")
   * @orm:GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @orm:Column(type="string", length="255")
   */
  protected $name;

  /**
   * @orm:Column(type="datetime")
   */
  protected $date;

    /**
     * Get id
     *
     * @return integer $id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get name
     *
     * @return string $name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set date
     *
     * @param datetime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * Get date
     *
     * @return datetime $date
     */
    public function getDate()
    {
        return $this->date;
    }

    public function __toString()
    {
      return $this->name;
    }
}