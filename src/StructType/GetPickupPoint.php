<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPoint StructType
 */
class GetPickupPoint extends AbstractStructBase
{
    /**
     * The GetPickupPointRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetPickupPointRequest
     */
    public $GetPickupPointRequest;

    /**
     * Constructor method for GetPickupPoint
     *
     * @uses GetPickupPoint::setGetPickupPointRequest()
     */
    public function __construct(GetPickupPointRequest $getPickupPointRequest = null)
    {
        $this
            ->setGetPickupPointRequest($getPickupPointRequest)
        ;
    }

    /**
     * Get GetPickupPointRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointRequest
     */
    public function getGetPickupPointRequest()
    {
        return $this->GetPickupPointRequest;
    }

    /**
     * Set GetPickupPointRequest value
     *
     * @return self
     */
    public function setGetPickupPointRequest(GetPickupPointRequest $getPickupPointRequest = null)
    {
        $this->GetPickupPointRequest = $getPickupPointRequest;
        return $this;
    }
}
