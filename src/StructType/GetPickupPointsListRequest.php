<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListRequest StructType
 */
class GetPickupPointsListRequest extends AbstractStructBase
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
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CPPclCode;
    /**
     * The CsgZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CsgZC;

    /**
     * Constructor method for GetPickupPointsListRequest
     *
     * @uses GetPickupPointsListRequest::setSecurityID()
     * @uses GetPickupPointsListRequest::setCPPclCode()
     * @uses GetPickupPointsListRequest::setCsgZC()
     *
     * @param string $cPPclCode
     * @param string $csgZC
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $csgZC = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
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
     * Get CPPclCode value
     *
     * @return string
     */
    public function getCPPclCode()
    {
        return $this->CPPclCode;
    }

    /**
     * Set CPPclCode value
     *
     * @param string $cPPclCode
     *
     * @return self
     */
    public function setCPPclCode($cPPclCode = null)
    {
        // validation for constraint: string
        if (null !== $cPPclCode && !\is_string($cPPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPclCode, true), \gettype($cPPclCode)), __LINE__);
        }
        $this->CPPclCode = $cPPclCode;
        return $this;
    }

    /**
     * Get CsgZC value
     *
     * @return string
     */
    public function getCsgZC()
    {
        return $this->CsgZC;
    }

    /**
     * Set CsgZC value
     *
     * @param string $csgZC
     *
     * @return self
     */
    public function setCsgZC($csgZC = null)
    {
        // validation for constraint: string
        if (null !== $csgZC && !\is_string($csgZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZC, true), \gettype($csgZC)), __LINE__);
        }
        $this->CsgZC = $csgZC;
        return $this;
    }
}
