<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointRequest StructType
 */
class GetPickupPointRequest extends AbstractStructBase
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
     * The PckCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $PckCode;

    /**
     * Constructor method for GetPickupPointRequest
     *
     * @uses GetPickupPointRequest::setSecurityID()
     * @uses GetPickupPointRequest::setPckCode()
     *
     * @param string $pckCode
     */
    public function __construct(IdentificationObject $securityID = null, $pckCode = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setPckCode($pckCode)
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

    /**
     * Get PckCode value
     *
     * @return string
     */
    public function getPckCode()
    {
        return $this->PckCode;
    }

    /**
     * Set PckCode value
     *
     * @param string $pckCode
     *
     * @return self
     */
    public function setPckCode($pckCode = null)
    {
        // validation for constraint: string
        if (null !== $pckCode && !\is_string($pckCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckCode, true), \gettype($pckCode)), __LINE__);
        }
        $this->PckCode = $pckCode;
        return $this;
    }
}
