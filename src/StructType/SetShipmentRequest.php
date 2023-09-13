<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentRequest StructType
 */
class SetShipmentRequest extends AbstractStructBase
{
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\IdentificationObject
     */
    public $SecurityID;

    /**
     * Constructor method for SetShipmentRequest
     *
     * @uses SetShipmentRequest::setSecurityID()
     */
    public function __construct(IdentificationObject $securityID = null)
    {
        $this
            ->setSecurityID($securityID)
        ;
    }

    /**
     * Get SecurityID value
     *
     * @return \Scraper\ScraperColisPrive\StructType\IdentificationObject
     */
    public function getSecurityID()
    {
        return $this->SecurityID;
    }

    /**
     * Set SecurityID value
     *
     * @return self
     */
    public function setSecurityID(IdentificationObject $securityID = null)
    {
        $this->SecurityID = $securityID;
        return $this;
    }
}
