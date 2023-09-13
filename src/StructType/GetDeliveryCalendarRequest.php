<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarRequest StructType
 */
class GetDeliveryCalendarRequest extends AbstractStructBase
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
     * The DlvrZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $DlvrZC;

    /**
     * Constructor method for GetDeliveryCalendarRequest
     *
     * @uses GetDeliveryCalendarRequest::setSecurityID()
     * @uses GetDeliveryCalendarRequest::setCPPclCode()
     * @uses GetDeliveryCalendarRequest::setDlvrZC()
     *
     * @param string $cPPclCode
     * @param string $dlvrZC
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $dlvrZC = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setDlvrZC($dlvrZC)
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
     * Get DlvrZC value
     *
     * @return string
     */
    public function getDlvrZC()
    {
        return $this->DlvrZC;
    }

    /**
     * Set DlvrZC value
     *
     * @param string $dlvrZC
     *
     * @return self
     */
    public function setDlvrZC($dlvrZC = null)
    {
        // validation for constraint: string
        if (null !== $dlvrZC && !\is_string($dlvrZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrZC, true), \gettype($dlvrZC)), __LINE__);
        }
        $this->DlvrZC = $dlvrZC;
        return $this;
    }
}
