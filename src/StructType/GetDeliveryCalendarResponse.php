<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarResponse StructType
 */
class GetDeliveryCalendarResponse extends AbstractStructBase
{
    /**
     * The GetDeliveryCalendarResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarReturn
     */
    public $GetDeliveryCalendarResult;

    /**
     * Constructor method for GetDeliveryCalendarResponse
     *
     * @uses GetDeliveryCalendarResponse::setGetDeliveryCalendarResult()
     */
    public function __construct(GetDeliveryCalendarReturn $getDeliveryCalendarResult = null)
    {
        $this
            ->setGetDeliveryCalendarResult($getDeliveryCalendarResult)
        ;
    }

    /**
     * Get GetDeliveryCalendarResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarReturn|null
     */
    public function getGetDeliveryCalendarResult()
    {
        return $this->GetDeliveryCalendarResult;
    }

    /**
     * Set GetDeliveryCalendarResult value
     *
     * @return self
     */
    public function setGetDeliveryCalendarResult(GetDeliveryCalendarReturn $getDeliveryCalendarResult = null)
    {
        $this->GetDeliveryCalendarResult = $getDeliveryCalendarResult;
        return $this;
    }
}
