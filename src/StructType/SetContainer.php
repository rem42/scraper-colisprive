<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainer StructType
 */
class SetContainer extends AbstractStructBase
{
    /**
     * The SetContainerRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetContainerRequest
     */
    public $SetContainerRequest;

    /**
     * Constructor method for SetContainer
     *
     * @uses SetContainer::setSetContainerRequest()
     */
    public function __construct(SetContainerRequest $setContainerRequest = null)
    {
        $this
            ->setSetContainerRequest($setContainerRequest)
        ;
    }

    /**
     * Get SetContainerRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetContainerRequest
     */
    public function getSetContainerRequest()
    {
        return $this->SetContainerRequest;
    }

    /**
     * Set SetContainerRequest value
     *
     * @return self
     */
    public function setSetContainerRequest(SetContainerRequest $setContainerRequest = null)
    {
        $this->SetContainerRequest = $setContainerRequest;
        return $this;
    }
}
