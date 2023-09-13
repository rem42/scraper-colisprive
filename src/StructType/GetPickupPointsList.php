<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsList StructType
 */
class GetPickupPointsList extends AbstractStructBase
{
    /**
     * The GetPickupPointsListRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetPickupPointsListRequest
     */
    public $GetPickupPointsListRequest;

    /**
     * Constructor method for GetPickupPointsList
     *
     * @uses GetPickupPointsList::setGetPickupPointsListRequest()
     */
    public function __construct(GetPickupPointsListRequest $getPickupPointsListRequest = null)
    {
        $this
            ->setGetPickupPointsListRequest($getPickupPointsListRequest)
        ;
    }

    /**
     * Get GetPickupPointsListRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointsListRequest
     */
    public function getGetPickupPointsListRequest()
    {
        return $this->GetPickupPointsListRequest;
    }

    /**
     * Set GetPickupPointsListRequest value
     *
     * @return self
     */
    public function setGetPickupPointsListRequest(GetPickupPointsListRequest $getPickupPointsListRequest = null)
    {
        $this->GetPickupPointsListRequest = $getPickupPointsListRequest;
        return $this;
    }
}
