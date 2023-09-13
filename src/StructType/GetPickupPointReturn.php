<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointReturn StructType
 */
class GetPickupPointReturn extends AbstractStructBase
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
     * The PckPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\PickupPointObject
     */
    public $PckPoint;

    /**
     * Constructor method for GetPickupPointReturn
     *
     * @uses GetPickupPointReturn::setWSResp()
     * @uses GetPickupPointReturn::setPckPoint()
     */
    public function __construct(ResponseObject $wSResp = null, PickupPointObject $pckPoint = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setPckPoint($pckPoint)
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

    /**
     * Get PckPoint value
     *
     * @return \Scraper\ScraperColisPrive\StructType\PickupPointObject|null
     */
    public function getPckPoint()
    {
        return $this->PckPoint;
    }

    /**
     * Set PckPoint value
     *
     * @return self
     */
    public function setPckPoint(PickupPointObject $pckPoint = null)
    {
        $this->PckPoint = $pckPoint;
        return $this;
    }
}
