<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentResponse StructType
 */
class SetShipmentResponse extends AbstractStructBase
{
    /**
     * The SetShipmentResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetShipmentReturn
     */
    public $SetShipmentResult;

    /**
     * Constructor method for SetShipmentResponse
     *
     * @uses SetShipmentResponse::setSetShipmentResult()
     */
    public function __construct(SetShipmentReturn $setShipmentResult = null)
    {
        $this
            ->setSetShipmentResult($setShipmentResult)
        ;
    }

    /**
     * Get SetShipmentResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetShipmentReturn|null
     */
    public function getSetShipmentResult()
    {
        return $this->SetShipmentResult;
    }

    /**
     * Set SetShipmentResult value
     *
     * @return self
     */
    public function setSetShipmentResult(SetShipmentReturn $setShipmentResult = null)
    {
        $this->SetShipmentResult = $setShipmentResult;
        return $this;
    }
}
