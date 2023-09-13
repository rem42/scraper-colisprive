<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDeliveryResponse StructType
 */
class Set2ndDeliveryResponse extends AbstractStructBase
{
    /**
     * The Set2ndDeliveryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryReturn
     */
    public $Set2ndDeliveryResult;

    /**
     * Constructor method for Set2ndDeliveryResponse
     *
     * @uses Set2ndDeliveryResponse::setSet2ndDeliveryResult()
     */
    public function __construct(Set2ndDeliveryReturn $set2ndDeliveryResult = null)
    {
        $this
            ->setSet2ndDeliveryResult($set2ndDeliveryResult)
        ;
    }

    /**
     * Get Set2ndDeliveryResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryReturn|null
     */
    public function getSet2ndDeliveryResult()
    {
        return $this->Set2ndDeliveryResult;
    }

    /**
     * Set Set2ndDeliveryResult value
     *
     * @return self
     */
    public function setSet2ndDeliveryResult(Set2ndDeliveryReturn $set2ndDeliveryResult = null)
    {
        $this->Set2ndDeliveryResult = $set2ndDeliveryResult;
        return $this;
    }
}
