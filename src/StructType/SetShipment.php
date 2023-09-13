<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipment StructType
 */
class SetShipment extends AbstractStructBase
{
    /**
     * The SetShipmentRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetShipmentRequest
     */
    public $SetShipmentRequest;

    /**
     * Constructor method for SetShipment
     *
     * @uses SetShipment::setSetShipmentRequest()
     */
    public function __construct(SetShipmentRequest $setShipmentRequest = null)
    {
        $this
            ->setSetShipmentRequest($setShipmentRequest)
        ;
    }

    /**
     * Get SetShipmentRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetShipmentRequest
     */
    public function getSetShipmentRequest()
    {
        return $this->SetShipmentRequest;
    }

    /**
     * Set SetShipmentRequest value
     *
     * @return self
     */
    public function setSetShipmentRequest(SetShipmentRequest $setShipmentRequest = null)
    {
        $this->SetShipmentRequest = $setShipmentRequest;
        return $this;
    }
}
