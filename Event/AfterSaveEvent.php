<?php

namespace Ddeboer\Salesforce\MapperBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class AfterSaveEvent extends Event
{
    private $results = array();

    /**
     * Construct event
     *
     * @param array $results    Array of results from Salesforce
     */
    public function __construct(array $results)
    {
        $this->results = $results;
    }

    /**
     * Get objects that will be saved to Salesforce
     *
     * @return array
     */
    public function getResults()
    {
        return $this->results;
    }
}
