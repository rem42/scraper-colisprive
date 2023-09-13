<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDeliveryResponse StructType
 */
class SetPickupPointDeliveryResponse extends AbstractStructBase
{
    /**
     * The SetPickupPointDeliveryResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryReturn
     */
    public $SetPickupPointDeliveryResult;

    /**
     * Constructor method for SetPickupPointDeliveryResponse
     *
     * @uses SetPickupPointDeliveryResponse::setSetPickupPointDeliveryResult()
     */
    public function __construct(SetPickupPointDeliveryReturn $setPickupPointDeliveryResult = null)
    {
        $this
            ->setSetPickupPointDeliveryResult($setPickupPointDeliveryResult)
        ;
    }

    /**
     * Get SetPickupPointDeliveryResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetPickupPointDeliveryReturn|null
     */
    public function getSetPickupPointDeliveryResult()
    {
        return $this->SetPickupPointDeliveryResult;
    }

    /**
     * Set SetPickupPointDeliveryResult value
     *
     * @return self
     */
    public function setSetPickupPointDeliveryResult(SetPickupPointDeliveryReturn $setPickupPointDeliveryResult = null)
    {
        $this->SetPickupPointDeliveryResult = $setPickupPointDeliveryResult;
        return $this;
    }
}
