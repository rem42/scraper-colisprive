<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcelRequest StructType
 */
class CancelParcelRequest extends AbstractStructBase
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
     * The CsgZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CsgZipCode;

    /**
     * Constructor method for CancelParcelRequest
     *
     * @uses CancelParcelRequest::setSecurityID()
     * @uses CancelParcelRequest::setCPPclCode()
     * @uses CancelParcelRequest::setCsgZipCode()
     *
     * @param string $cPPclCode
     * @param string $csgZipCode
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $csgZipCode = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZipCode($csgZipCode)
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
     * Get CsgZipCode value
     *
     * @return string
     */
    public function getCsgZipCode()
    {
        return $this->CsgZipCode;
    }

    /**
     * Set CsgZipCode value
     *
     * @param string $csgZipCode
     *
     * @return self
     */
    public function setCsgZipCode($csgZipCode = null)
    {
        // validation for constraint: string
        if (null !== $csgZipCode && !\is_string($csgZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZipCode, true), \gettype($csgZipCode)), __LINE__);
        }
        $this->CsgZipCode = $csgZipCode;
        return $this;
    }
}
