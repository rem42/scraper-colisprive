<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetPickupPointDeliveryRequest StructType
 */
class SetPickupPointDeliveryRequest extends AbstractStructBase
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
     * The CsgEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CsgEmail;
    /**
     * The CsgPhoneNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CsgPhoneNum;
    /**
     * The CsgGsmNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CsgGsmNum;

    /**
     * Constructor method for SetPickupPointDeliveryRequest
     *
     * @uses SetPickupPointDeliveryRequest::setSecurityID()
     * @uses SetPickupPointDeliveryRequest::setCPPclCode()
     * @uses SetPickupPointDeliveryRequest::setCsgZC()
     * @uses SetPickupPointDeliveryRequest::setPckCode()
     * @uses SetPickupPointDeliveryRequest::setCsgEmail()
     * @uses SetPickupPointDeliveryRequest::setCsgPhoneNum()
     * @uses SetPickupPointDeliveryRequest::setCsgGsmNum()
     *
     * @param string $cPPclCode
     * @param string $csgZC
     * @param string $pckCode
     * @param string $csgEmail
     * @param string $csgPhoneNum
     * @param string $csgGsmNum
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $csgZC = null, $pckCode = null, $csgEmail = null, $csgPhoneNum = null, $csgGsmNum = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
            ->setPckCode($pckCode)
            ->setCsgEmail($csgEmail)
            ->setCsgPhoneNum($csgPhoneNum)
            ->setCsgGsmNum($csgGsmNum)
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

    /**
     * Get CsgEmail value
     *
     * @return string|null
     */
    public function getCsgEmail()
    {
        return $this->CsgEmail;
    }

    /**
     * Set CsgEmail value
     *
     * @param string $csgEmail
     *
     * @return self
     */
    public function setCsgEmail($csgEmail = null)
    {
        // validation for constraint: string
        if (null !== $csgEmail && !\is_string($csgEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgEmail, true), \gettype($csgEmail)), __LINE__);
        }
        $this->CsgEmail = $csgEmail;
        return $this;
    }

    /**
     * Get CsgPhoneNum value
     *
     * @return string|null
     */
    public function getCsgPhoneNum()
    {
        return $this->CsgPhoneNum;
    }

    /**
     * Set CsgPhoneNum value
     *
     * @param string $csgPhoneNum
     *
     * @return self
     */
    public function setCsgPhoneNum($csgPhoneNum = null)
    {
        // validation for constraint: string
        if (null !== $csgPhoneNum && !\is_string($csgPhoneNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgPhoneNum, true), \gettype($csgPhoneNum)), __LINE__);
        }
        $this->CsgPhoneNum = $csgPhoneNum;
        return $this;
    }

    /**
     * Get CsgGsmNum value
     *
     * @return string|null
     */
    public function getCsgGsmNum()
    {
        return $this->CsgGsmNum;
    }

    /**
     * Set CsgGsmNum value
     *
     * @param string $csgGsmNum
     *
     * @return self
     */
    public function setCsgGsmNum($csgGsmNum = null)
    {
        // validation for constraint: string
        if (null !== $csgGsmNum && !\is_string($csgGsmNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgGsmNum, true), \gettype($csgGsmNum)), __LINE__);
        }
        $this->CsgGsmNum = $csgGsmNum;
        return $this;
    }
}
