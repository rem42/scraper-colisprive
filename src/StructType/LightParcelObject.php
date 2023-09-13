<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LightParcelObject StructType
 */
class LightParcelObject extends AbstractStructBase
{
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
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $OrderID;
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
     * The PclAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\AddressObject
     */
    public $PclAdd;
    /**
     * The PclShipDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $PclShipDate;
    /**
     * The PclWeight
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $PclWeight;
    /**
     * The ChargeAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $ChargeAmnt;
    /**
     * The CPPrdCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CPPrdCode;

    /**
     * Constructor method for LightParcelObject
     *
     * @uses LightParcelObject::setCPPclCode()
     * @uses LightParcelObject::setOrderID()
     * @uses LightParcelObject::setDlvrName()
     * @uses LightParcelObject::setPclAdd()
     * @uses LightParcelObject::setPclShipDate()
     * @uses LightParcelObject::setPclWeight()
     * @uses LightParcelObject::setChargeAmnt()
     * @uses LightParcelObject::setCPPrdCode()
     *
     * @param string $cPPclCode
     * @param string $orderID
     * @param string $dlvrName
     * @param string $pclShipDate
     * @param int    $pclWeight
     * @param float  $chargeAmnt
     * @param string $cPPrdCode
     */
    public function __construct($cPPclCode = null, $orderID = null, $dlvrName = null, AddressObject $pclAdd = null, $pclShipDate = null, $pclWeight = null, $chargeAmnt = null, $cPPrdCode = null)
    {
        $this
            ->setCPPclCode($cPPclCode)
            ->setOrderID($orderID)
            ->setDlvrName($dlvrName)
            ->setPclAdd($pclAdd)
            ->setPclShipDate($pclShipDate)
            ->setPclWeight($pclWeight)
            ->setChargeAmnt($chargeAmnt)
            ->setCPPrdCode($cPPrdCode)
        ;
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
     * Get OrderID value
     *
     * @return string
     */
    public function getOrderID()
    {
        return $this->OrderID;
    }

    /**
     * Set OrderID value
     *
     * @param string $orderID
     *
     * @return self
     */
    public function setOrderID($orderID = null)
    {
        // validation for constraint: string
        if (null !== $orderID && !\is_string($orderID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($orderID, true), \gettype($orderID)), __LINE__);
        }
        $this->OrderID = $orderID;
        return $this;
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
     * Get PclAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\AddressObject
     */
    public function getPclAdd()
    {
        return $this->PclAdd;
    }

    /**
     * Set PclAdd value
     *
     * @return self
     */
    public function setPclAdd(AddressObject $pclAdd = null)
    {
        $this->PclAdd = $pclAdd;
        return $this;
    }

    /**
     * Get PclShipDate value
     *
     * @return string
     */
    public function getPclShipDate()
    {
        return $this->PclShipDate;
    }

    /**
     * Set PclShipDate value
     *
     * @param string $pclShipDate
     *
     * @return self
     */
    public function setPclShipDate($pclShipDate = null)
    {
        // validation for constraint: string
        if (null !== $pclShipDate && !\is_string($pclShipDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pclShipDate, true), \gettype($pclShipDate)), __LINE__);
        }
        $this->PclShipDate = $pclShipDate;
        return $this;
    }

    /**
     * Get PclWeight value
     *
     * @return int
     */
    public function getPclWeight()
    {
        return $this->PclWeight;
    }

    /**
     * Set PclWeight value
     *
     * @param int $pclWeight
     *
     * @return self
     */
    public function setPclWeight($pclWeight = null)
    {
        // validation for constraint: int
        if (null !== $pclWeight && !(\is_int($pclWeight) || ctype_digit($pclWeight))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($pclWeight, true), \gettype($pclWeight)), __LINE__);
        }
        $this->PclWeight = $pclWeight;
        return $this;
    }

    /**
     * Get ChargeAmnt value
     *
     * @return float
     */
    public function getChargeAmnt()
    {
        return $this->ChargeAmnt;
    }

    /**
     * Set ChargeAmnt value
     *
     * @param float $chargeAmnt
     *
     * @return self
     */
    public function setChargeAmnt($chargeAmnt = null)
    {
        // validation for constraint: float
        if (null !== $chargeAmnt && !(\is_float($chargeAmnt) || is_numeric($chargeAmnt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($chargeAmnt, true), \gettype($chargeAmnt)), __LINE__);
        }
        $this->ChargeAmnt = $chargeAmnt;
        return $this;
    }

    /**
     * Get CPPrdCode value
     *
     * @return string|null
     */
    public function getCPPrdCode()
    {
        return $this->CPPrdCode;
    }

    /**
     * Set CPPrdCode value
     *
     * @param string $cPPrdCode
     *
     * @return self
     */
    public function setCPPrdCode($cPPrdCode = null)
    {
        // validation for constraint: string
        if (null !== $cPPrdCode && !\is_string($cPPrdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPrdCode, true), \gettype($cPPrdCode)), __LINE__);
        }
        $this->CPPrdCode = $cPPrdCode;
        return $this;
    }
}
