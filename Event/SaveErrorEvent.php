<?php

namespace Ddeboer\Salesforce\MapperBundle\Event;

use Symfony\Component\EventDispatcher\Event;

class SaveErrorEvent extends Event
{
    private $exception;

    /**
     * Construct event
     *
     * @param \SoapFault $exception    SoapFault thrown by the Salesforce client
     */
    public function __construct(\SoapFault $exception)
    {
        $this->exception = $exception;
    }

    /**
     * Get objects that will be saved to Salesforce
     *
     * @return array
     */
    public function getException()
    {
        return $this->exception;
    }
}
