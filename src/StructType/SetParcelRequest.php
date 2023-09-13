<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelRequest StructType
 */
class SetParcelRequest extends AbstractStructBase
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
     * The CltNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CltNum;
    /**
     * The CsgAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public $CsgAdd;
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
     * The IsPclWithPOD
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsPclWithPOD;
    /**
     * The LabelFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $LabelFormat;
    /**
     * The ChargeAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var float
     */
    public $ChargeAmnt;
    /**
     * The ValueAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var float
     */
    public $ValueAmnt;
    /**
     * The SubAcc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $SubAcc;
    /**
     * The AutoPrintPDF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $AutoPrintPDF;
    /**
     * The CntrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CntrCode;
    /**
     * The DestType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestType;
    /**
     * The DestName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestName;
    /**
     * The SendType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $SendType;
    /**
     * The SendName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $SendName;
    /**
     * The CodeHub
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CodeHub;
    /**
     * The SndZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $SndZC;
    /**
     * The HLQ
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $HLQ;
    /**
     * The Brand
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Brand;

    /**
     * Constructor method for SetParcelRequest
     *
     * @uses SetParcelRequest::setSecurityID()
     * @uses SetParcelRequest::setOrderID()
     * @uses SetParcelRequest::setCltNum()
     * @uses SetParcelRequest::setCsgAdd()
     * @uses SetParcelRequest::setPclShipDate()
     * @uses SetParcelRequest::setPclWeight()
     * @uses SetParcelRequest::setIsPclWithPOD()
     * @uses SetParcelRequest::setLabelFormat()
     * @uses SetParcelRequest::setChargeAmnt()
     * @uses SetParcelRequest::setValueAmnt()
     * @uses SetParcelRequest::setSubAcc()
     * @uses SetParcelRequest::setAutoPrintPDF()
     * @uses SetParcelRequest::setCntrCode()
     * @uses SetParcelRequest::setDestType()
     * @uses SetParcelRequest::setDestName()
     * @uses SetParcelRequest::setSendType()
     * @uses SetParcelRequest::setSendName()
     * @uses SetParcelRequest::setCodeHub()
     * @uses SetParcelRequest::setSndZC()
     * @uses SetParcelRequest::setHLQ()
     * @uses SetParcelRequest::setBrand()
     *
     * @param string $orderID
     * @param string $cltNum
     * @param string $pclShipDate
     * @param int    $pclWeight
     * @param bool   $isPclWithPOD
     * @param string $labelFormat
     * @param float  $chargeAmnt
     * @param float  $valueAmnt
     * @param string $subAcc
     * @param string $autoPrintPDF
     * @param string $cntrCode
     * @param string $destType
     * @param string $destName
     * @param string $sendType
     * @param string $sendName
     * @param string $codeHub
     * @param string $sndZC
     * @param string $hLQ
     * @param string $brand
     */
    public function __construct(IdentificationObject $securityID = null, $orderID = null, $cltNum = null, DeliveryAddressObject $csgAdd = null, $pclShipDate = null, $pclWeight = null, $isPclWithPOD = null, $labelFormat = null, $chargeAmnt = null, $valueAmnt = null, $subAcc = null, $autoPrintPDF = null, $cntrCode = null, $destType = null, $destName = null, $sendType = null, $sendName = null, $codeHub = null, $sndZC = null, $hLQ = null, $brand = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setOrderID($orderID)
            ->setCltNum($cltNum)
            ->setCsgAdd($csgAdd)
            ->setPclShipDate($pclShipDate)
            ->setPclWeight($pclWeight)
            ->setIsPclWithPOD($isPclWithPOD)
            ->setLabelFormat($labelFormat)
            ->setChargeAmnt($chargeAmnt)
            ->setValueAmnt($valueAmnt)
            ->setSubAcc($subAcc)
            ->setAutoPrintPDF($autoPrintPDF)
            ->setCntrCode($cntrCode)
            ->setDestType($destType)
            ->setDestName($destName)
            ->setSendType($sendType)
            ->setSendName($sendName)
            ->setCodeHub($codeHub)
            ->setSndZC($sndZC)
            ->setHLQ($hLQ)
            ->setBrand($brand)
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
     * Get CltNum value
     *
     * @return string
     */
    public function getCltNum()
    {
        return $this->CltNum;
    }

    /**
     * Set CltNum value
     *
     * @param string $cltNum
     *
     * @return self
     */
    public function setCltNum($cltNum = null)
    {
        // validation for constraint: string
        if (null !== $cltNum && !\is_string($cltNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cltNum, true), \gettype($cltNum)), __LINE__);
        }
        $this->CltNum = $cltNum;
        return $this;
    }

    /**
     * Get CsgAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public function getCsgAdd()
    {
        return $this->CsgAdd;
    }

    /**
     * Set CsgAdd value
     *
     * @return self
     */
    public function setCsgAdd(DeliveryAddressObject $csgAdd = null)
    {
        $this->CsgAdd = $csgAdd;
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
     * Get IsPclWithPOD value
     *
     * @return bool
     */
    public function getIsPclWithPOD()
    {
        return $this->IsPclWithPOD;
    }

    /**
     * Set IsPclWithPOD value
     *
     * @param bool $isPclWithPOD
     *
     * @return self
     */
    public function setIsPclWithPOD($isPclWithPOD = null)
    {
        // validation for constraint: boolean
        if (null !== $isPclWithPOD && !\is_bool($isPclWithPOD)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isPclWithPOD, true), \gettype($isPclWithPOD)), __LINE__);
        }
        $this->IsPclWithPOD = $isPclWithPOD;
        return $this;
    }

    /**
     * Get LabelFormat value
     *
     * @return string
     */
    public function getLabelFormat()
    {
        return $this->LabelFormat;
    }

    /**
     * Set LabelFormat value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::getValidValues()
     *
     * @param string $labelFormat
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLabelFormat($labelFormat = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::valueIsValid($labelFormat)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat', \is_array($labelFormat) ? implode(', ', $labelFormat) : var_export($labelFormat, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumLabelFormat::getValidValues())), __LINE__);
        }
        $this->LabelFormat = $labelFormat;
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
     * Get ValueAmnt value
     *
     * @return float
     */
    public function getValueAmnt()
    {
        return $this->ValueAmnt;
    }

    /**
     * Set ValueAmnt value
     *
     * @param float $valueAmnt
     *
     * @return self
     */
    public function setValueAmnt($valueAmnt = null)
    {
        // validation for constraint: float
        if (null !== $valueAmnt && !(\is_float($valueAmnt) || is_numeric($valueAmnt))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($valueAmnt, true), \gettype($valueAmnt)), __LINE__);
        }
        $this->ValueAmnt = $valueAmnt;
        return $this;
    }

    /**
     * Get SubAcc value
     *
     * @return string|null
     */
    public function getSubAcc()
    {
        return $this->SubAcc;
    }

    /**
     * Set SubAcc value
     *
     * @param string $subAcc
     *
     * @return self
     */
    public function setSubAcc($subAcc = null)
    {
        // validation for constraint: string
        if (null !== $subAcc && !\is_string($subAcc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($subAcc, true), \gettype($subAcc)), __LINE__);
        }
        $this->SubAcc = $subAcc;
        return $this;
    }

    /**
     * Get AutoPrintPDF value
     *
     * @return string|null
     */
    public function getAutoPrintPDF()
    {
        return $this->AutoPrintPDF;
    }

    /**
     * Set AutoPrintPDF value
     *
     * @param string $autoPrintPDF
     *
     * @return self
     */
    public function setAutoPrintPDF($autoPrintPDF = null)
    {
        // validation for constraint: string
        if (null !== $autoPrintPDF && !\is_string($autoPrintPDF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($autoPrintPDF, true), \gettype($autoPrintPDF)), __LINE__);
        }
        $this->AutoPrintPDF = $autoPrintPDF;
        return $this;
    }

    /**
     * Get CntrCode value
     *
     * @return string|null
     */
    public function getCntrCode()
    {
        return $this->CntrCode;
    }

    /**
     * Set CntrCode value
     *
     * @param string $cntrCode
     *
     * @return self
     */
    public function setCntrCode($cntrCode = null)
    {
        // validation for constraint: string
        if (null !== $cntrCode && !\is_string($cntrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cntrCode, true), \gettype($cntrCode)), __LINE__);
        }
        $this->CntrCode = $cntrCode;
        return $this;
    }

    /**
     * Get DestType value
     *
     * @return string|null
     */
    public function getDestType()
    {
        return $this->DestType;
    }

    /**
     * Set DestType value
     *
     * @param string $destType
     *
     * @return self
     */
    public function setDestType($destType = null)
    {
        // validation for constraint: string
        if (null !== $destType && !\is_string($destType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destType, true), \gettype($destType)), __LINE__);
        }
        $this->DestType = $destType;
        return $this;
    }

    /**
     * Get DestName value
     *
     * @return string|null
     */
    public function getDestName()
    {
        return $this->DestName;
    }

    /**
     * Set DestName value
     *
     * @param string $destName
     *
     * @return self
     */
    public function setDestName($destName = null)
    {
        // validation for constraint: string
        if (null !== $destName && !\is_string($destName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destName, true), \gettype($destName)), __LINE__);
        }
        $this->DestName = $destName;
        return $this;
    }

    /**
     * Get SendType value
     *
     * @return string|null
     */
    public function getSendType()
    {
        return $this->SendType;
    }

    /**
     * Set SendType value
     *
     * @param string $sendType
     *
     * @return self
     */
    public function setSendType($sendType = null)
    {
        // validation for constraint: string
        if (null !== $sendType && !\is_string($sendType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendType, true), \gettype($sendType)), __LINE__);
        }
        $this->SendType = $sendType;
        return $this;
    }

    /**
     * Get SendName value
     *
     * @return string|null
     */
    public function getSendName()
    {
        return $this->SendName;
    }

    /**
     * Set SendName value
     *
     * @param string $sendName
     *
     * @return self
     */
    public function setSendName($sendName = null)
    {
        // validation for constraint: string
        if (null !== $sendName && !\is_string($sendName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sendName, true), \gettype($sendName)), __LINE__);
        }
        $this->SendName = $sendName;
        return $this;
    }

    /**
     * Get CodeHub value
     *
     * @return string|null
     */
    public function getCodeHub()
    {
        return $this->CodeHub;
    }

    /**
     * Set CodeHub value
     *
     * @param string $codeHub
     *
     * @return self
     */
    public function setCodeHub($codeHub = null)
    {
        // validation for constraint: string
        if (null !== $codeHub && !\is_string($codeHub)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($codeHub, true), \gettype($codeHub)), __LINE__);
        }
        $this->CodeHub = $codeHub;
        return $this;
    }

    /**
     * Get SndZC value
     *
     * @return string|null
     */
    public function getSndZC()
    {
        return $this->SndZC;
    }

    /**
     * Set SndZC value
     *
     * @param string $sndZC
     *
     * @return self
     */
    public function setSndZC($sndZC = null)
    {
        // validation for constraint: string
        if (null !== $sndZC && !\is_string($sndZC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($sndZC, true), \gettype($sndZC)), __LINE__);
        }
        $this->SndZC = $sndZC;
        return $this;
    }

    /**
     * Get HLQ value
     *
     * @return string|null
     */
    public function getHLQ()
    {
        return $this->HLQ;
    }

    /**
     * Set HLQ value
     *
     * @param string $hLQ
     *
     * @return self
     */
    public function setHLQ($hLQ = null)
    {
        // validation for constraint: string
        if (null !== $hLQ && !\is_string($hLQ)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($hLQ, true), \gettype($hLQ)), __LINE__);
        }
        $this->HLQ = $hLQ;
        return $this;
    }

    /**
     * Get Brand value
     *
     * @return string|null
     */
    public function getBrand()
    {
        return $this->Brand;
    }

    /**
     * Set Brand value
     *
     * @param string $brand
     *
     * @return self
     */
    public function setBrand($brand = null)
    {
        // validation for constraint: string
        if (null !== $brand && !\is_string($brand)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($brand, true), \gettype($brand)), __LINE__);
        }
        $this->Brand = $brand;
        return $this;
    }
}
