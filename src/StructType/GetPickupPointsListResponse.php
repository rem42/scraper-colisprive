<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListResponse StructType
 */
class GetPickupPointsListResponse extends AbstractStructBase
{
    /**
     * The GetPickupPointsListResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetPickupPointsListReturn
     */
    public $GetPickupPointsListResult;

    /**
     * Constructor method for GetPickupPointsListResponse
     *
     * @uses GetPickupPointsListResponse::setGetPickupPointsListResult()
     */
    public function __construct(GetPickupPointsListReturn $getPickupPointsListResult = null)
    {
        $this
            ->setGetPickupPointsListResult($getPickupPointsListResult)
        ;
    }

    /**
     * Get GetPickupPointsListResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointsListReturn|null
     */
    public function getGetPickupPointsListResult()
    {
        return $this->GetPickupPointsListResult;
    }

    /**
     * Set GetPickupPointsListResult value
     *
     * @return self
     */
    public function setGetPickupPointsListResult(GetPickupPointsListReturn $getPickupPointsListResult = null)
    {
        $this->GetPickupPointsListResult = $getPickupPointsListResult;
        return $this;
    }
}
