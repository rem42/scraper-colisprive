<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointResponse StructType
 */
class GetPickupPointResponse extends AbstractStructBase
{
    /**
     * The GetPickupPointResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetPickupPointReturn
     */
    public $GetPickupPointResult;

    /**
     * Constructor method for GetPickupPointResponse
     *
     * @uses GetPickupPointResponse::setGetPickupPointResult()
     */
    public function __construct(GetPickupPointReturn $getPickupPointResult = null)
    {
        $this
            ->setGetPickupPointResult($getPickupPointResult)
        ;
    }

    /**
     * Get GetPickupPointResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetPickupPointReturn|null
     */
    public function getGetPickupPointResult()
    {
        return $this->GetPickupPointResult;
    }

    /**
     * Set GetPickupPointResult value
     *
     * @return self
     */
    public function setGetPickupPointResult(GetPickupPointReturn $getPickupPointResult = null)
    {
        $this->GetPickupPointResult = $getPickupPointResult;
        return $this;
    }
}
