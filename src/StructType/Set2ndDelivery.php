<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDelivery StructType
 */
class Set2ndDelivery extends AbstractStructBase
{
    /**
     * The Set2ndDeliveryRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryRequest
     */
    public $Set2ndDeliveryRequest;

    /**
     * Constructor method for Set2ndDelivery
     *
     * @uses Set2ndDelivery::setSet2ndDeliveryRequest()
     */
    public function __construct(Set2ndDeliveryRequest $set2ndDeliveryRequest = null)
    {
        $this
            ->setSet2ndDeliveryRequest($set2ndDeliveryRequest)
        ;
    }

    /**
     * Get Set2ndDeliveryRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryRequest
     */
    public function getSet2ndDeliveryRequest()
    {
        return $this->Set2ndDeliveryRequest;
    }

    /**
     * Set Set2ndDeliveryRequest value
     *
     * @return self
     */
    public function setSet2ndDeliveryRequest(Set2ndDeliveryRequest $set2ndDeliveryRequest = null)
    {
        $this->Set2ndDeliveryRequest = $set2ndDeliveryRequest;
        return $this;
    }
}
