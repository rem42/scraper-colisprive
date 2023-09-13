<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcelReturn StructType
 */
class GetParcelReturn extends AbstractStructBase
{
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
     * The ValueAmnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $ValueAmnt;
    /**
     * The IsDlvrScheduleOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsDlvrScheduleOk;
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
     * The IsDlvr3PartyOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsDlvr3PartyOk;
    /**
     * The IsDlvrPckOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsDlvrPckOk;
    /**
     * The IsClaimOk
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var bool
     */
    public $IsClaimOk;
    /**
     * The CmpyCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $CmpyCode;
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\ResponseObject
     */
    public $WSResp;
    /**
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CPPclCode;
    /**
     * The CsgAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public $CsgAdd;
    /**
     * The ThirdPartyAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject
     */
    public $ThirdPartyAdd;
    /**
     * The DlvrPlnDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrPlnDate;
    /**
     * The CustoName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CustoName;
    /**
     * The CurrentStatusDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CurrentStatusDate;
    /**
     * The CurrentStatusCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CurrentStatusCode;
    /**
     * The CurrentStatusDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CurrentStatusDesc;
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
     * The CPPrdName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CPPrdName;
    /**
     * The PckPoint
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\PickupPointObject
     */
    public $PckPoint;
    /**
     * The DlvrScheduleKoMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrScheduleKoMsg;
    /**
     * The ClaimKoMsg
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ClaimKoMsg;
    /**
     * The ShipModeCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShipModeCode;
    /**
     * The PclStatusHisto
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\StatusObject>
     */
    public $PclStatusHisto;
    /**
     * The CustoCarePhoneNum
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CustoCarePhoneNum;
    /**
     * The CustoCareMention
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CustoCareMention;
    /**
     * The CitiesDlvr
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\CityObject>
     */
    public $CitiesDlvr;
    /**
     * The CmpyPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CmpyPclCode;

    /**
     * Constructor method for GetParcelReturn
     *
     * @uses GetParcelReturn::setChargeAmnt()
     * @uses GetParcelReturn::setValueAmnt()
     * @uses GetParcelReturn::setIsDlvrScheduleOk()
     * @uses GetParcelReturn::setIsPclWithPOD()
     * @uses GetParcelReturn::setIsDlvr3PartyOk()
     * @uses GetParcelReturn::setIsDlvrPckOk()
     * @uses GetParcelReturn::setIsClaimOk()
     * @uses GetParcelReturn::setCmpyCode()
     * @uses GetParcelReturn::setWSResp()
     * @uses GetParcelReturn::setCPPclCode()
     * @uses GetParcelReturn::setCsgAdd()
     * @uses GetParcelReturn::setThirdPartyAdd()
     * @uses GetParcelReturn::setDlvrPlnDate()
     * @uses GetParcelReturn::setCustoName()
     * @uses GetParcelReturn::setCurrentStatusDate()
     * @uses GetParcelReturn::setCurrentStatusCode()
     * @uses GetParcelReturn::setCurrentStatusDesc()
     * @uses GetParcelReturn::setCPPrdCode()
     * @uses GetParcelReturn::setCPPrdName()
     * @uses GetParcelReturn::setPckPoint()
     * @uses GetParcelReturn::setDlvrScheduleKoMsg()
     * @uses GetParcelReturn::setClaimKoMsg()
     * @uses GetParcelReturn::setShipModeCode()
     * @uses GetParcelReturn::setPclStatusHisto()
     * @uses GetParcelReturn::setCustoCarePhoneNum()
     * @uses GetParcelReturn::setCustoCareMention()
     * @uses GetParcelReturn::setCitiesDlvr()
     * @uses GetParcelReturn::setCmpyPclCode()
     *
     * @param float                                                     $chargeAmnt
     * @param float                                                     $valueAmnt
     * @param bool                                                      $isDlvrScheduleOk
     * @param bool                                                      $isPclWithPOD
     * @param bool                                                      $isDlvr3PartyOk
     * @param bool                                                      $isDlvrPckOk
     * @param bool                                                      $isClaimOk
     * @param string                                                    $cmpyCode
     * @param string                                                    $cPPclCode
     * @param string                                                    $dlvrPlnDate
     * @param string                                                    $custoName
     * @param string                                                    $currentStatusDate
     * @param string                                                    $currentStatusCode
     * @param string                                                    $currentStatusDesc
     * @param string                                                    $cPPrdCode
     * @param string                                                    $cPPrdName
     * @param string                                                    $dlvrScheduleKoMsg
     * @param string                                                    $claimKoMsg
     * @param string                                                    $shipModeCode
     * @param array<\Scraper\ScraperColisPrive\StructType\StatusObject> $pclStatusHisto
     * @param string                                                    $custoCarePhoneNum
     * @param string                                                    $custoCareMention
     * @param array<\Scraper\ScraperColisPrive\StructType\CityObject>   $citiesDlvr
     * @param string                                                    $cmpyPclCode
     */
    public function __construct($chargeAmnt = null, $valueAmnt = null, $isDlvrScheduleOk = null, $isPclWithPOD = null, $isDlvr3PartyOk = null, $isDlvrPckOk = null, $isClaimOk = null, $cmpyCode = null, ResponseObject $wSResp = null, $cPPclCode = null, DeliveryAddressObject $csgAdd = null, DeliveryAddressObject $thirdPartyAdd = null, $dlvrPlnDate = null, $custoName = null, $currentStatusDate = null, $currentStatusCode = null, $currentStatusDesc = null, $cPPrdCode = null, $cPPrdName = null, PickupPointObject $pckPoint = null, $dlvrScheduleKoMsg = null, $claimKoMsg = null, $shipModeCode = null, array $pclStatusHisto = [], $custoCarePhoneNum = null, $custoCareMention = null, array $citiesDlvr = [], $cmpyPclCode = null)
    {
        $this
            ->setChargeAmnt($chargeAmnt)
            ->setValueAmnt($valueAmnt)
            ->setIsDlvrScheduleOk($isDlvrScheduleOk)
            ->setIsPclWithPOD($isPclWithPOD)
            ->setIsDlvr3PartyOk($isDlvr3PartyOk)
            ->setIsDlvrPckOk($isDlvrPckOk)
            ->setIsClaimOk($isClaimOk)
            ->setCmpyCode($cmpyCode)
            ->setWSResp($wSResp)
            ->setCPPclCode($cPPclCode)
            ->setCsgAdd($csgAdd)
            ->setThirdPartyAdd($thirdPartyAdd)
            ->setDlvrPlnDate($dlvrPlnDate)
            ->setCustoName($custoName)
            ->setCurrentStatusDate($currentStatusDate)
            ->setCurrentStatusCode($currentStatusCode)
            ->setCurrentStatusDesc($currentStatusDesc)
            ->setCPPrdCode($cPPrdCode)
            ->setCPPrdName($cPPrdName)
            ->setPckPoint($pckPoint)
            ->setDlvrScheduleKoMsg($dlvrScheduleKoMsg)
            ->setClaimKoMsg($claimKoMsg)
            ->setShipModeCode($shipModeCode)
            ->setPclStatusHisto($pclStatusHisto)
            ->setCustoCarePhoneNum($custoCarePhoneNum)
            ->setCustoCareMention($custoCareMention)
            ->setCitiesDlvr($citiesDlvr)
            ->setCmpyPclCode($cmpyPclCode)
        ;
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
     * Get IsDlvrScheduleOk value
     *
     * @return bool
     */
    public function getIsDlvrScheduleOk()
    {
        return $this->IsDlvrScheduleOk;
    }

    /**
     * Set IsDlvrScheduleOk value
     *
     * @param bool $isDlvrScheduleOk
     *
     * @return self
     */
    public function setIsDlvrScheduleOk($isDlvrScheduleOk = null)
    {
        // validation for constraint: boolean
        if (null !== $isDlvrScheduleOk && !\is_bool($isDlvrScheduleOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvrScheduleOk, true), \gettype($isDlvrScheduleOk)), __LINE__);
        }
        $this->IsDlvrScheduleOk = $isDlvrScheduleOk;
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
     * Get IsDlvr3PartyOk value
     *
     * @return bool
     */
    public function getIsDlvr3PartyOk()
    {
        return $this->IsDlvr3PartyOk;
    }

    /**
     * Set IsDlvr3PartyOk value
     *
     * @param bool $isDlvr3PartyOk
     *
     * @return self
     */
    public function setIsDlvr3PartyOk($isDlvr3PartyOk = null)
    {
        // validation for constraint: boolean
        if (null !== $isDlvr3PartyOk && !\is_bool($isDlvr3PartyOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvr3PartyOk, true), \gettype($isDlvr3PartyOk)), __LINE__);
        }
        $this->IsDlvr3PartyOk = $isDlvr3PartyOk;
        return $this;
    }

    /**
     * Get IsDlvrPckOk value
     *
     * @return bool
     */
    public function getIsDlvrPckOk()
    {
        return $this->IsDlvrPckOk;
    }

    /**
     * Set IsDlvrPckOk value
     *
     * @param bool $isDlvrPckOk
     *
     * @return self
     */
    public function setIsDlvrPckOk($isDlvrPckOk = null)
    {
        // validation for constraint: boolean
        if (null !== $isDlvrPckOk && !\is_bool($isDlvrPckOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isDlvrPckOk, true), \gettype($isDlvrPckOk)), __LINE__);
        }
        $this->IsDlvrPckOk = $isDlvrPckOk;
        return $this;
    }

    /**
     * Get IsClaimOk value
     *
     * @return bool
     */
    public function getIsClaimOk()
    {
        return $this->IsClaimOk;
    }

    /**
     * Set IsClaimOk value
     *
     * @param bool $isClaimOk
     *
     * @return self
     */
    public function setIsClaimOk($isClaimOk = null)
    {
        // validation for constraint: boolean
        if (null !== $isClaimOk && !\is_bool($isClaimOk)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a bool, %s given', var_export($isClaimOk, true), \gettype($isClaimOk)), __LINE__);
        }
        $this->IsClaimOk = $isClaimOk;
        return $this;
    }

    /**
     * Get CmpyCode value
     *
     * @return string
     */
    public function getCmpyCode()
    {
        return $this->CmpyCode;
    }

    /**
     * Set CmpyCode value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::getValidValues()
     *
     * @param string $cmpyCode
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCmpyCode($cmpyCode = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::valueIsValid($cmpyCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode', \is_array($cmpyCode) ? implode(', ', $cmpyCode) : var_export($cmpyCode, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumCompanyCode::getValidValues())), __LINE__);
        }
        $this->CmpyCode = $cmpyCode;
        return $this;
    }

    /**
     * Get WSResp value
     *
     * @return \Scraper\ScraperColisPrive\StructType\ResponseObject|null
     */
    public function getWSResp()
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     *
     * @return self
     */
    public function setWSResp(ResponseObject $wSResp = null)
    {
        $this->WSResp = $wSResp;
        return $this;
    }

    /**
     * Get CPPclCode value
     *
     * @return string|null
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
     * Get CsgAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject|null
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
     * Get ThirdPartyAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\DeliveryAddressObject|null
     */
    public function getThirdPartyAdd()
    {
        return $this->ThirdPartyAdd;
    }

    /**
     * Set ThirdPartyAdd value
     *
     * @return self
     */
    public function setThirdPartyAdd(DeliveryAddressObject $thirdPartyAdd = null)
    {
        $this->ThirdPartyAdd = $thirdPartyAdd;
        return $this;
    }

    /**
     * Get DlvrPlnDate value
     *
     * @return string|null
     */
    public function getDlvrPlnDate()
    {
        return $this->DlvrPlnDate;
    }

    /**
     * Set DlvrPlnDate value
     *
     * @param string $dlvrPlnDate
     *
     * @return self
     */
    public function setDlvrPlnDate($dlvrPlnDate = null)
    {
        // validation for constraint: string
        if (null !== $dlvrPlnDate && !\is_string($dlvrPlnDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrPlnDate, true), \gettype($dlvrPlnDate)), __LINE__);
        }
        $this->DlvrPlnDate = $dlvrPlnDate;
        return $this;
    }

    /**
     * Get CustoName value
     *
     * @return string|null
     */
    public function getCustoName()
    {
        return $this->CustoName;
    }

    /**
     * Set CustoName value
     *
     * @param string $custoName
     *
     * @return self
     */
    public function setCustoName($custoName = null)
    {
        // validation for constraint: string
        if (null !== $custoName && !\is_string($custoName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoName, true), \gettype($custoName)), __LINE__);
        }
        $this->CustoName = $custoName;
        return $this;
    }

    /**
     * Get CurrentStatusDate value
     *
     * @return string|null
     */
    public function getCurrentStatusDate()
    {
        return $this->CurrentStatusDate;
    }

    /**
     * Set CurrentStatusDate value
     *
     * @param string $currentStatusDate
     *
     * @return self
     */
    public function setCurrentStatusDate($currentStatusDate = null)
    {
        // validation for constraint: string
        if (null !== $currentStatusDate && !\is_string($currentStatusDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusDate, true), \gettype($currentStatusDate)), __LINE__);
        }
        $this->CurrentStatusDate = $currentStatusDate;
        return $this;
    }

    /**
     * Get CurrentStatusCode value
     *
     * @return string|null
     */
    public function getCurrentStatusCode()
    {
        return $this->CurrentStatusCode;
    }

    /**
     * Set CurrentStatusCode value
     *
     * @param string $currentStatusCode
     *
     * @return self
     */
    public function setCurrentStatusCode($currentStatusCode = null)
    {
        // validation for constraint: string
        if (null !== $currentStatusCode && !\is_string($currentStatusCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusCode, true), \gettype($currentStatusCode)), __LINE__);
        }
        $this->CurrentStatusCode = $currentStatusCode;
        return $this;
    }

    /**
     * Get CurrentStatusDesc value
     *
     * @return string|null
     */
    public function getCurrentStatusDesc()
    {
        return $this->CurrentStatusDesc;
    }

    /**
     * Set CurrentStatusDesc value
     *
     * @param string $currentStatusDesc
     *
     * @return self
     */
    public function setCurrentStatusDesc($currentStatusDesc = null)
    {
        // validation for constraint: string
        if (null !== $currentStatusDesc && !\is_string($currentStatusDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($currentStatusDesc, true), \gettype($currentStatusDesc)), __LINE__);
        }
        $this->CurrentStatusDesc = $currentStatusDesc;
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

    /**
     * Get CPPrdName value
     *
     * @return string|null
     */
    public function getCPPrdName()
    {
        return $this->CPPrdName;
    }

    /**
     * Set CPPrdName value
     *
     * @param string $cPPrdName
     *
     * @return self
     */
    public function setCPPrdName($cPPrdName = null)
    {
        // validation for constraint: string
        if (null !== $cPPrdName && !\is_string($cPPrdName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPPrdName, true), \gettype($cPPrdName)), __LINE__);
        }
        $this->CPPrdName = $cPPrdName;
        return $this;
    }

    /**
     * Get PckPoint value
     *
     * @return \Scraper\ScraperColisPrive\StructType\PickupPointObject|null
     */
    public function getPckPoint()
    {
        return $this->PckPoint;
    }

    /**
     * Set PckPoint value
     *
     * @return self
     */
    public function setPckPoint(PickupPointObject $pckPoint = null)
    {
        $this->PckPoint = $pckPoint;
        return $this;
    }

    /**
     * Get DlvrScheduleKoMsg value
     *
     * @return string|null
     */
    public function getDlvrScheduleKoMsg()
    {
        return $this->DlvrScheduleKoMsg;
    }

    /**
     * Set DlvrScheduleKoMsg value
     *
     * @param string $dlvrScheduleKoMsg
     *
     * @return self
     */
    public function setDlvrScheduleKoMsg($dlvrScheduleKoMsg = null)
    {
        // validation for constraint: string
        if (null !== $dlvrScheduleKoMsg && !\is_string($dlvrScheduleKoMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($dlvrScheduleKoMsg, true), \gettype($dlvrScheduleKoMsg)), __LINE__);
        }
        $this->DlvrScheduleKoMsg = $dlvrScheduleKoMsg;
        return $this;
    }

    /**
     * Get ClaimKoMsg value
     *
     * @return string|null
     */
    public function getClaimKoMsg()
    {
        return $this->ClaimKoMsg;
    }

    /**
     * Set ClaimKoMsg value
     *
     * @param string $claimKoMsg
     *
     * @return self
     */
    public function setClaimKoMsg($claimKoMsg = null)
    {
        // validation for constraint: string
        if (null !== $claimKoMsg && !\is_string($claimKoMsg)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($claimKoMsg, true), \gettype($claimKoMsg)), __LINE__);
        }
        $this->ClaimKoMsg = $claimKoMsg;
        return $this;
    }

    /**
     * Get ShipModeCode value
     *
     * @return string|null
     */
    public function getShipModeCode()
    {
        return $this->ShipModeCode;
    }

    /**
     * Set ShipModeCode value
     *
     * @param string $shipModeCode
     *
     * @return self
     */
    public function setShipModeCode($shipModeCode = null)
    {
        // validation for constraint: string
        if (null !== $shipModeCode && !\is_string($shipModeCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipModeCode, true), \gettype($shipModeCode)), __LINE__);
        }
        $this->ShipModeCode = $shipModeCode;
        return $this;
    }

    /**
     * Get PclStatusHisto value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\StatusObject>|null
     */
    public function getPclStatusHisto()
    {
        return $this->PclStatusHisto;
    }

    /**
     * This method is responsible for validating the values passed to the setPclStatusHisto method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPclStatusHisto method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePclStatusHistoForArrayConstraintsFromSetPclStatusHisto(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $getParcelReturnPclStatusHistoItem) {
            // validation for constraint: itemType
            if (!$getParcelReturnPclStatusHistoItem instanceof \Scraper\ScraperColisPrive\StructType\StatusObject) {
                $invalidValues[] = \is_object($getParcelReturnPclStatusHistoItem) ? $getParcelReturnPclStatusHistoItem::class : sprintf('%s(%s)', \gettype($getParcelReturnPclStatusHistoItem), var_export($getParcelReturnPclStatusHistoItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PclStatusHisto property can only contain items of type \Scraper\ScraperColisPrive\StructType\StatusObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set PclStatusHisto value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\StatusObject> $pclStatusHisto
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setPclStatusHisto(array $pclStatusHisto = [])
    {
        // validation for constraint: array
        if ('' !== ($pclStatusHistoArrayErrorMessage = self::validatePclStatusHistoForArrayConstraintsFromSetPclStatusHisto($pclStatusHisto))) {
            throw new \InvalidArgumentException($pclStatusHistoArrayErrorMessage, __LINE__);
        }
        $this->PclStatusHisto = $pclStatusHisto;
        return $this;
    }

    /**
     * Add item to PclStatusHisto value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToPclStatusHisto(StatusObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperColisPrive\StructType\StatusObject) {
            throw new \InvalidArgumentException(sprintf('The PclStatusHisto property can only contain items of type \Scraper\ScraperColisPrive\StructType\StatusObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PclStatusHisto[] = $item;
        return $this;
    }

    /**
     * Get CustoCarePhoneNum value
     *
     * @return string|null
     */
    public function getCustoCarePhoneNum()
    {
        return $this->CustoCarePhoneNum;
    }

    /**
     * Set CustoCarePhoneNum value
     *
     * @param string $custoCarePhoneNum
     *
     * @return self
     */
    public function setCustoCarePhoneNum($custoCarePhoneNum = null)
    {
        // validation for constraint: string
        if (null !== $custoCarePhoneNum && !\is_string($custoCarePhoneNum)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoCarePhoneNum, true), \gettype($custoCarePhoneNum)), __LINE__);
        }
        $this->CustoCarePhoneNum = $custoCarePhoneNum;
        return $this;
    }

    /**
     * Get CustoCareMention value
     *
     * @return string|null
     */
    public function getCustoCareMention()
    {
        return $this->CustoCareMention;
    }

    /**
     * Set CustoCareMention value
     *
     * @param string $custoCareMention
     *
     * @return self
     */
    public function setCustoCareMention($custoCareMention = null)
    {
        // validation for constraint: string
        if (null !== $custoCareMention && !\is_string($custoCareMention)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($custoCareMention, true), \gettype($custoCareMention)), __LINE__);
        }
        $this->CustoCareMention = $custoCareMention;
        return $this;
    }

    /**
     * Get CitiesDlvr value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\CityObject>|null
     */
    public function getCitiesDlvr()
    {
        return $this->CitiesDlvr;
    }

    /**
     * This method is responsible for validating the values passed to the setCitiesDlvr method
     * This method is willingly generated in order to preserve the one-line inline validation within the setCitiesDlvr method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateCitiesDlvrForArrayConstraintsFromSetCitiesDlvr(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $getParcelReturnCitiesDlvrItem) {
            // validation for constraint: itemType
            if (!$getParcelReturnCitiesDlvrItem instanceof \Scraper\ScraperColisPrive\StructType\CityObject) {
                $invalidValues[] = \is_object($getParcelReturnCitiesDlvrItem) ? $getParcelReturnCitiesDlvrItem::class : sprintf('%s(%s)', \gettype($getParcelReturnCitiesDlvrItem), var_export($getParcelReturnCitiesDlvrItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The CitiesDlvr property can only contain items of type \Scraper\ScraperColisPrive\StructType\CityObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set CitiesDlvr value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\CityObject> $citiesDlvr
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setCitiesDlvr(array $citiesDlvr = [])
    {
        // validation for constraint: array
        if ('' !== ($citiesDlvrArrayErrorMessage = self::validateCitiesDlvrForArrayConstraintsFromSetCitiesDlvr($citiesDlvr))) {
            throw new \InvalidArgumentException($citiesDlvrArrayErrorMessage, __LINE__);
        }
        $this->CitiesDlvr = $citiesDlvr;
        return $this;
    }

    /**
     * Add item to CitiesDlvr value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToCitiesDlvr(CityObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperColisPrive\StructType\CityObject) {
            throw new \InvalidArgumentException(sprintf('The CitiesDlvr property can only contain items of type \Scraper\ScraperColisPrive\StructType\CityObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->CitiesDlvr[] = $item;
        return $this;
    }

    /**
     * Get CmpyPclCode value
     *
     * @return string|null
     */
    public function getCmpyPclCode()
    {
        return $this->CmpyPclCode;
    }

    /**
     * Set CmpyPclCode value
     *
     * @param string $cmpyPclCode
     *
     * @return self
     */
    public function setCmpyPclCode($cmpyPclCode = null)
    {
        // validation for constraint: string
        if (null !== $cmpyPclCode && !\is_string($cmpyPclCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cmpyPclCode, true), \gettype($cmpyPclCode)), __LINE__);
        }
        $this->CmpyPclCode = $cmpyPclCode;
        return $this;
    }
}
