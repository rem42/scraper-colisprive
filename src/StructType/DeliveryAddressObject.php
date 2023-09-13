<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryAddressObject StructType
 */
class DeliveryAddressObject extends AbstractStructBase
{
    /**
     * The DlvrName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $DlvrName;
    /**
     * The DlvrAddress
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\AddressObject
     */
    public $DlvrAddress;
    /**
     * The DlvrEmail
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrEmail;
    /**
     * The DlvrPhon
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrPhon;
    /**
     * The DlvrGsm
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrGsm;
    /**
     * The DlvrDCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrDCode;
    /**
     * The DlvrComments
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrComments;
    /**
     * The DlvrLng
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrLng;
    /**
     * The DlvrCurrency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrCurrency;

    /**
     * Constructor method for DeliveryAddressObject
     *
     * @uses DeliveryAddressObject::setDlvrName()
     * @uses DeliveryAddressObject::setDlvrAddress()
     * @uses DeliveryAddressObject::setDlvrEmail()
     * @uses DeliveryAddressObject::setDlvrPhon()
     * @uses DeliveryAddressObject::setDlvrGsm()
     * @uses DeliveryAddressObject::setDlvrDCode()
     * @uses DeliveryAddressObject::setDlvrComments()
     * @uses DeliveryAddressObject::setDlvrLng()
     * @uses DeliveryAddressObject::setDlvrCurrency()
     *
     * @param string $dlvrName
     * @param string $dlvrEmail
     * @param string $dlvrPhon
     * @param string $dlvrGsm
     * @param string $dlvrDCode
     * @param string $dlvrComments
     * @param string $dlvrLng
     * @param string $dlvrCurrency
     */
    public function __construct($dlvrName = null, AddressObject $dlvrAddress = null, $dlvrEmail = null, $dlvrPhon = null, $dlvrGsm = null, $dlvrDCode = null, $dlvrComments = null, $dlvrLng = null, $dlvrCurrency = null)
    {
        $this
            ->setDlvrName($dlvrName)
            ->setDlvrAddress($dlvrAddress)
            ->setDlvrEmail($dlvrEmail)
            ->setDlvrPhon($dlvrPhon)
            ->setDlvrGsm($dlvrGsm)
            ->setDlvrDCode($dlvrDCode)
            ->setDlvrComments($dlvrComments)
            ->setDlvrLng($dlvrLng)
            ->setDlvrCurrency($dlvrCurrency)
        ;
    }

    /**
     * Get DlvrName value
     *
     * @return string
     */
    public function getDlvrName()
    {
        return $this->DlvrName;
    }

    /**
     * Set DlvrName value
     *
     * @param string $dlvrName
     *
     * @return self
     */
    public function setDlvrName($dlvrName = null)
    {
        // validation for constraint: string
        if (null !== $dlvrName && !\is_string($dlvrName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrName, true), \gettype($dlvrName)), __LINE__);
        }
        $this->DlvrName = $dlvrName;
        return $this;
    }

    /**
     * Get DlvrAddress value
     *
     * @return \Scraper\ScraperColisPrive\StructType\AddressObject
     */
    public function getDlvrAddress()
    {
        return $this->DlvrAddress;
    }

    /**
     * Set DlvrAddress value
     *
     * @return self
     */
    public function setDlvrAddress(AddressObject $dlvrAddress = null)
    {
        $this->DlvrAddress = $dlvrAddress;
        return $this;
    }

    /**
     * Get DlvrEmail value
     *
     * @return string|null
     */
    public function getDlvrEmail()
    {
        return $this->DlvrEmail;
    }

    /**
     * Set DlvrEmail value
     *
     * @param string $dlvrEmail
     *
     * @return self
     */
    public function setDlvrEmail($dlvrEmail = null)
    {
        // validation for constraint: string
        if (null !== $dlvrEmail && !\is_string($dlvrEmail)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrEmail, true), \gettype($dlvrEmail)), __LINE__);
        }
        $this->DlvrEmail = $dlvrEmail;
        return $this;
    }

    /**
     * Get DlvrPhon value
     *
     * @return string|null
     */
    public function getDlvrPhon()
    {
        return $this->DlvrPhon;
    }

    /**
     * Set DlvrPhon value
     *
     * @param string $dlvrPhon
     *
     * @return self
     */
    public function setDlvrPhon($dlvrPhon = null)
    {
        // validation for constraint: string
        if (null !== $dlvrPhon && !\is_string($dlvrPhon)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrPhon, true), \gettype($dlvrPhon)), __LINE__);
        }
        $this->DlvrPhon = $dlvrPhon;
        return $this;
    }

    /**
     * Get DlvrGsm value
     *
     * @return string|null
     */
    public function getDlvrGsm()
    {
        return $this->DlvrGsm;
    }

    /**
     * Set DlvrGsm value
     *
     * @param string $dlvrGsm
     *
     * @return self
     */
    public function setDlvrGsm($dlvrGsm = null)
    {
        // validation for constraint: string
        if (null !== $dlvrGsm && !\is_string($dlvrGsm)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrGsm, true), \gettype($dlvrGsm)), __LINE__);
        }
        $this->DlvrGsm = $dlvrGsm;
        return $this;
    }

    /**
     * Get DlvrDCode value
     *
     * @return string|null
     */
    public function getDlvrDCode()
    {
        return $this->DlvrDCode;
    }

    /**
     * Set DlvrDCode value
     *
     * @param string $dlvrDCode
     *
     * @return self
     */
    public function setDlvrDCode($dlvrDCode = null)
    {
        // validation for constraint: string
        if (null !== $dlvrDCode && !\is_string($dlvrDCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrDCode, true), \gettype($dlvrDCode)), __LINE__);
        }
        $this->DlvrDCode = $dlvrDCode;
        return $this;
    }

    /**
     * Get DlvrComments value
     *
     * @return string|null
     */
    public function getDlvrComments()
    {
        return $this->DlvrComments;
    }

    /**
     * Set DlvrComments value
     *
     * @param string $dlvrComments
     *
     * @return self
     */
    public function setDlvrComments($dlvrComments = null)
    {
        // validation for constraint: string
        if (null !== $dlvrComments && !\is_string($dlvrComments)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrComments, true), \gettype($dlvrComments)), __LINE__);
        }
        $this->DlvrComments = $dlvrComments;
        return $this;
    }

    /**
     * Get DlvrLng value
     *
     * @return string|null
     */
    public function getDlvrLng()
    {
        return $this->DlvrLng;
    }

    /**
     * Set DlvrLng value
     *
     * @param string $dlvrLng
     *
     * @return self
     */
    public function setDlvrLng($dlvrLng = null)
    {
        // validation for constraint: string
        if (null !== $dlvrLng && !\is_string($dlvrLng)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrLng, true), \gettype($dlvrLng)), __LINE__);
        }
        $this->DlvrLng = $dlvrLng;
        return $this;
    }

    /**
     * Get DlvrCurrency value
     *
     * @return string|null
     */
    public function getDlvrCurrency()
    {
        return $this->DlvrCurrency;
    }

    /**
     * Set DlvrCurrency value
     *
     * @param string $dlvrCurrency
     *
     * @return self
     */
    public function setDlvrCurrency($dlvrCurrency = null)
    {
        // validation for constraint: string
        if (null !== $dlvrCurrency && !\is_string($dlvrCurrency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrCurrency, true), \gettype($dlvrCurrency)), __LINE__);
        }
        $this->DlvrCurrency = $dlvrCurrency;
        return $this;
    }
}
