<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDelivery StructType
 */
class SetPickupPointDelivery extends AbstractStructBase
{
    /**
     * The SetPickupPointDeliveryRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryRequest
     */
    public $SetPickupPointDeliveryRequest;

    /**
     * Constructor method for SetPickupPointDelivery
     *
     * @uses SetPickupPointDelivery::setSetPickupPointDeliveryRequest()
     */
    public function __construct(SetPickupPointDeliveryRequest $setPickupPointDeliveryRequest = null)
    {
        $this
            ->setSetPickupPointDeliveryRequest($setPickupPointDeliveryRequest)
        ;
    }

    /**
     * Get SetPickupPointDeliveryRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryRequest
     */
    public function getSetPickupPointDeliveryRequest()
    {
        return $this->SetPickupPointDeliveryRequest;
    }

    /**
     * Set SetPickupPointDeliveryRequest value
     *
     * @return self
     */
    public function setSetPickupPointDeliveryRequest(SetPickupPointDeliveryRequest $setPickupPointDeliveryRequest = null)
    {
        $this->SetPickupPointDeliveryRequest = $setPickupPointDeliveryRequest;
        return $this;
    }
}
