<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendar StructType
 */
class GetDeliveryCalendar extends AbstractStructBase
{
    /**
     * The GetDeliveryCalendarRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarRequest
     */
    public $GetDeliveryCalendarRequest;

    /**
     * Constructor method for GetDeliveryCalendar
     *
     * @uses GetDeliveryCalendar::setGetDeliveryCalendarRequest()
     */
    public function __construct(GetDeliveryCalendarRequest $getDeliveryCalendarRequest = null)
    {
        $this
            ->setGetDeliveryCalendarRequest($getDeliveryCalendarRequest)
        ;
    }

    /**
     * Get GetDeliveryCalendarRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetDeliveryCalendarRequest
     */
    public function getGetDeliveryCalendarRequest()
    {
        return $this->GetDeliveryCalendarRequest;
    }

    /**
     * Set GetDeliveryCalendarRequest value
     *
     * @return self
     */
    public function setGetDeliveryCalendarRequest(GetDeliveryCalendarRequest $getDeliveryCalendarRequest = null)
    {
        $this->GetDeliveryCalendarRequest = $getDeliveryCalendarRequest;
        return $this;
    }
}
