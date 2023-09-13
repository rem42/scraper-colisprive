<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for Set2ndDeliveryRequest StructType
 */
class Set2ndDeliveryRequest extends AbstractStructBase
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
     * The DlvrModeType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $DlvrModeType;
    /**
     * The DlvrAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public $DlvrAdd;
    /**
     * The DlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $DlvrDate;

    /**
     * Constructor method for Set2ndDeliveryRequest
     *
     * @uses Set2ndDeliveryRequest::setSecurityID()
     * @uses Set2ndDeliveryRequest::setCPPclCode()
     * @uses Set2ndDeliveryRequest::setCsgZC()
     * @uses Set2ndDeliveryRequest::setDlvrModeType()
     * @uses Set2ndDeliveryRequest::setDlvrAdd()
     * @uses Set2ndDeliveryRequest::setDlvrDate()
     *
     * @param string $cPPclCode
     * @param string $csgZC
     * @param string $dlvrModeType
     * @param string $dlvrDate
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $csgZC = null, $dlvrModeType = null, DeliveryAddressObject $dlvrAdd = null, $dlvrDate = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZC($csgZC)
            ->setDlvrModeType($dlvrModeType)
            ->setDlvrAdd($dlvrAdd)
            ->setDlvrDate($dlvrDate)
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
     * Get DlvrModeType value
     *
     * @return string
     */
    public function getDlvrModeType()
    {
        return $this->DlvrModeType;
    }

    /**
     * Set DlvrModeType value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::getValidValues()
     *
     * @param string $dlvrModeType
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setDlvrModeType($dlvrModeType = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::valueIsValid($dlvrModeType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType', \is_array($dlvrModeType) ? implode(', ', $dlvrModeType) : var_export($dlvrModeType, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumDeliveryModeType::getValidValues())), __LINE__);
        }
        $this->DlvrModeType = $dlvrModeType;
        return $this;
    }

    /**
     * Get DlvrAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public function getDlvrAdd()
    {
        return $this->DlvrAdd;
    }

    /**
     * Set DlvrAdd value
     *
     * @return self
     */
    public function setDlvrAdd(DeliveryAddressObject $dlvrAdd = null)
    {
        $this->DlvrAdd = $dlvrAdd;
        return $this;
    }

    /**
     * Get DlvrDate value
     *
     * @return string
     */
    public function getDlvrDate()
    {
        return $this->DlvrDate;
    }

    /**
     * Set DlvrDate value
     *
     * @param string $dlvrDate
     *
     * @return self
     */
    public function setDlvrDate($dlvrDate = null)
    {
        // validation for constraint: string
        if (null !== $dlvrDate && !\is_string($dlvrDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrDate, true), \gettype($dlvrDate)), __LINE__);
        }
        $this->DlvrDate = $dlvrDate;
        return $this;
    }
}
