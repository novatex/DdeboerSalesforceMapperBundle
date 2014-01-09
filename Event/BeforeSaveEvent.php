<?php

namespace Ddeboer\Salesforce\MapperBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class BeforeSaveEvent extends Event
{
    private $objects = array();

    /**
     * Construct event
     *
     * @param array $objects    Array of Salesforce objects that will be
     *                          saved to Salesforce
     */
    public function __construct(array $objects)
    {
        $this->objects = $objects;
    }

    /**
     * Get objects that will be saved to Salesforce
     *
     * @return array
     */
    public function getObjects()
    {
        return $this->objects;
    }
}
