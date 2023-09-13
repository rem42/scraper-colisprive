<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDeliveryReturn StructType
 */
class SetPickupPointDeliveryReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\ResponseObject
     */
    public $WSResp;

    /**
     * Constructor method for SetPickupPointDeliveryReturn
     *
     * @uses SetPickupPointDeliveryReturn::setWSResp()
     */
    public function __construct(ResponseObject $wSResp = null)
    {
        $this
            ->setWSResp($wSResp)
        ;
    }

    /**
     * Get WSResp value
     *
     * @return \Scraper\ScraperColisPrive\StructType\ResponseObject|null
     */
    public function getWSResp()
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     *
     * @return self
     */
    public function setWSResp(ResponseObject $wSResp = null)
    {
        $this->WSResp = $wSResp;
        return $this;
    }
}
