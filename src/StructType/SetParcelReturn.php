<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelReturn StructType
 */
class SetParcelReturn extends AbstractStructBase
{
    /**
     * The LabelType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $LabelType;
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
     * The OrderID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $OrderID;
    /**
     * The LabelUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $LabelUrl;
    /**
     * The LabelZpl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $LabelZpl;
    /**
     * The RegOffCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $RegOffCode;
    /**
     * The RoundCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $RoundCode;
    /**
     * The CarrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CarrCode;
    /**
     * The CABCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CABCode;
    /**
     * The ZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ZC;
    /**
     * The TNTAcnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTAcnt;
    /**
     * The TNTCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTCab;
    /**
     * The TNTDept
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTDept;
    /**
     * The TNTPrd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTPrd;
    /**
     * The TNTVer
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTVer;
    /**
     * The TNTComment1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTComment1;
    /**
     * The TNTComment2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTComment2;
    /**
     * The TNTComment3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTComment3;
    /**
     * The TNTComment4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $TNTComment4;
    /**
     * The CLPAcnt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPAcnt;
    /**
     * The CLPFlwCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPFlwCab;
    /**
     * The CLPFlwCabPrt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPFlwCabPrt;
    /**
     * The CLPPCHCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPPCHCab;
    /**
     * The CLPPCHCabPrt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPPCHCabPrt;
    /**
     * The CLPSort
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPSort;
    /**
     * The CLPPFCSite
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CLPPFCSite;
    /**
     * The RefCab
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $RefCab;
    /**
     * The DestRefExt
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestRefExt;
    /**
     * The DestRef
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestRef;
    /**
     * The DestAddr
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestAddr;
    /**
     * The DestZip
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestZip;
    /**
     * The DestCity
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DestCity;
    /**
     * The MRCAB
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRCAB;
    /**
     * The MRAgency
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRAgency;
    /**
     * The MRRoundCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRRoundCode;
    /**
     * The MRRefPudo
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRRefPudo;
    /**
     * The MRPreTri
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRPreTri;
    /**
     * The MRLibPfd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRLibPfd;
    /**
     * The MRNoGroup
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRNoGroup;
    /**
     * The MRNumExpe
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MRNumExpe;

    /**
     * Constructor method for SetParcelReturn
     *
     * @uses SetParcelReturn::setLabelType()
     * @uses SetParcelReturn::setWSResp()
     * @uses SetParcelReturn::setCPPclCode()
     * @uses SetParcelReturn::setOrderID()
     * @uses SetParcelReturn::setLabelUrl()
     * @uses SetParcelReturn::setLabelZpl()
     * @uses SetParcelReturn::setRegOffCode()
     * @uses SetParcelReturn::setRoundCode()
     * @uses SetParcelReturn::setCarrCode()
     * @uses SetParcelReturn::setCABCode()
     * @uses SetParcelReturn::setZC()
     * @uses SetParcelReturn::setTNTAcnt()
     * @uses SetParcelReturn::setTNTCab()
     * @uses SetParcelReturn::setTNTDept()
     * @uses SetParcelReturn::setTNTPrd()
     * @uses SetParcelReturn::setTNTVer()
     * @uses SetParcelReturn::setTNTComment1()
     * @uses SetParcelReturn::setTNTComment2()
     * @uses SetParcelReturn::setTNTComment3()
     * @uses SetParcelReturn::setTNTComment4()
     * @uses SetParcelReturn::setCLPAcnt()
     * @uses SetParcelReturn::setCLPFlwCab()
     * @uses SetParcelReturn::setCLPFlwCabPrt()
     * @uses SetParcelReturn::setCLPPCHCab()
     * @uses SetParcelReturn::setCLPPCHCabPrt()
     * @uses SetParcelReturn::setCLPSort()
     * @uses SetParcelReturn::setCLPPFCSite()
     * @uses SetParcelReturn::setRefCab()
     * @uses SetParcelReturn::setDestRefExt()
     * @uses SetParcelReturn::setDestRef()
     * @uses SetParcelReturn::setDestAddr()
     * @uses SetParcelReturn::setDestZip()
     * @uses SetParcelReturn::setDestCity()
     * @uses SetParcelReturn::setMRCAB()
     * @uses SetParcelReturn::setMRAgency()
     * @uses SetParcelReturn::setMRRoundCode()
     * @uses SetParcelReturn::setMRRefPudo()
     * @uses SetParcelReturn::setMRPreTri()
     * @uses SetParcelReturn::setMRLibPfd()
     * @uses SetParcelReturn::setMRNoGroup()
     * @uses SetParcelReturn::setMRNumExpe()
     *
     * @param string $labelType
     * @param string $cPPclCode
     * @param string $orderID
     * @param string $labelUrl
     * @param string $labelZpl
     * @param string $regOffCode
     * @param string $roundCode
     * @param string $carrCode
     * @param string $cABCode
     * @param string $zC
     * @param string $tNTAcnt
     * @param string $tNTCab
     * @param string $tNTDept
     * @param string $tNTPrd
     * @param string $tNTVer
     * @param string $tNTComment1
     * @param string $tNTComment2
     * @param string $tNTComment3
     * @param string $tNTComment4
     * @param string $cLPAcnt
     * @param string $cLPFlwCab
     * @param string $cLPFlwCabPrt
     * @param string $cLPPCHCab
     * @param string $cLPPCHCabPrt
     * @param string $cLPSort
     * @param string $cLPPFCSite
     * @param string $refCab
     * @param string $destRefExt
     * @param string $destRef
     * @param string $destAddr
     * @param string $destZip
     * @param string $destCity
     * @param string $mRCAB
     * @param string $mRAgency
     * @param string $mRRoundCode
     * @param string $mRRefPudo
     * @param string $mRPreTri
     * @param string $mRLibPfd
     * @param string $mRNoGroup
     * @param string $mRNumExpe
     */
    public function __construct($labelType = null, ResponseObject $wSResp = null, $cPPclCode = null, $orderID = null, $labelUrl = null, $labelZpl = null, $regOffCode = null, $roundCode = null, $carrCode = null, $cABCode = null, $zC = null, $tNTAcnt = null, $tNTCab = null, $tNTDept = null, $tNTPrd = null, $tNTVer = null, $tNTComment1 = null, $tNTComment2 = null, $tNTComment3 = null, $tNTComment4 = null, $cLPAcnt = null, $cLPFlwCab = null, $cLPFlwCabPrt = null, $cLPPCHCab = null, $cLPPCHCabPrt = null, $cLPSort = null, $cLPPFCSite = null, $refCab = null, $destRefExt = null, $destRef = null, $destAddr = null, $destZip = null, $destCity = null, $mRCAB = null, $mRAgency = null, $mRRoundCode = null, $mRRefPudo = null, $mRPreTri = null, $mRLibPfd = null, $mRNoGroup = null, $mRNumExpe = null)
    {
        $this
            ->setLabelType($labelType)
            ->setWSResp($wSResp)
            ->setCPPclCode($cPPclCode)
            ->setOrderID($orderID)
            ->setLabelUrl($labelUrl)
            ->setLabelZpl($labelZpl)
            ->setRegOffCode($regOffCode)
            ->setRoundCode($roundCode)
            ->setCarrCode($carrCode)
            ->setCABCode($cABCode)
            ->setZC($zC)
            ->setTNTAcnt($tNTAcnt)
            ->setTNTCab($tNTCab)
            ->setTNTDept($tNTDept)
            ->setTNTPrd($tNTPrd)
            ->setTNTVer($tNTVer)
            ->setTNTComment1($tNTComment1)
            ->setTNTComment2($tNTComment2)
            ->setTNTComment3($tNTComment3)
            ->setTNTComment4($tNTComment4)
            ->setCLPAcnt($cLPAcnt)
            ->setCLPFlwCab($cLPFlwCab)
            ->setCLPFlwCabPrt($cLPFlwCabPrt)
            ->setCLPPCHCab($cLPPCHCab)
            ->setCLPPCHCabPrt($cLPPCHCabPrt)
            ->setCLPSort($cLPSort)
            ->setCLPPFCSite($cLPPFCSite)
            ->setRefCab($refCab)
            ->setDestRefExt($destRefExt)
            ->setDestRef($destRef)
            ->setDestAddr($destAddr)
            ->setDestZip($destZip)
            ->setDestCity($destCity)
            ->setMRCAB($mRCAB)
            ->setMRAgency($mRAgency)
            ->setMRRoundCode($mRRoundCode)
            ->setMRRefPudo($mRRefPudo)
            ->setMRPreTri($mRPreTri)
            ->setMRLibPfd($mRLibPfd)
            ->setMRNoGroup($mRNoGroup)
            ->setMRNumExpe($mRNumExpe)
        ;
    }

    /**
     * Get LabelType value
     *
     * @return string
     */
    public function getLabelType()
    {
        return $this->LabelType;
    }

    /**
     * Set LabelType value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelType::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumLabelType::getValidValues()
     *
     * @param string $labelType
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setLabelType($labelType = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumLabelType::valueIsValid($labelType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumLabelType', \is_array($labelType) ? implode(', ', $labelType) : var_export($labelType, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumLabelType::getValidValues())), __LINE__);
        }
        $this->LabelType = $labelType;
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
     * Get OrderID value
     *
     * @return string|null
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
     * Get LabelUrl value
     *
     * @return string|null
     */
    public function getLabelUrl()
    {
        return $this->LabelUrl;
    }

    /**
     * Set LabelUrl value
     *
     * @param string $labelUrl
     *
     * @return self
     */
    public function setLabelUrl($labelUrl = null)
    {
        // validation for constraint: string
        if (null !== $labelUrl && !\is_string($labelUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelUrl, true), \gettype($labelUrl)), __LINE__);
        }
        $this->LabelUrl = $labelUrl;
        return $this;
    }

    /**
     * Get LabelZpl value
     *
     * @return string|null
     */
    public function getLabelZpl()
    {
        return $this->LabelZpl;
    }

    /**
     * Set LabelZpl value
     *
     * @param string $labelZpl
     *
     * @return self
     */
    public function setLabelZpl($labelZpl = null)
    {
        // validation for constraint: string
        if (null !== $labelZpl && !\is_string($labelZpl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($labelZpl, true), \gettype($labelZpl)), __LINE__);
        }
        $this->LabelZpl = $labelZpl;
        return $this;
    }

    /**
     * Get RegOffCode value
     *
     * @return string|null
     */
    public function getRegOffCode()
    {
        return $this->RegOffCode;
    }

    /**
     * Set RegOffCode value
     *
     * @param string $regOffCode
     *
     * @return self
     */
    public function setRegOffCode($regOffCode = null)
    {
        // validation for constraint: string
        if (null !== $regOffCode && !\is_string($regOffCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($regOffCode, true), \gettype($regOffCode)), __LINE__);
        }
        $this->RegOffCode = $regOffCode;
        return $this;
    }

    /**
     * Get RoundCode value
     *
     * @return string|null
     */
    public function getRoundCode()
    {
        return $this->RoundCode;
    }

    /**
     * Set RoundCode value
     *
     * @param string $roundCode
     *
     * @return self
     */
    public function setRoundCode($roundCode = null)
    {
        // validation for constraint: string
        if (null !== $roundCode && !\is_string($roundCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($roundCode, true), \gettype($roundCode)), __LINE__);
        }
        $this->RoundCode = $roundCode;
        return $this;
    }

    /**
     * Get CarrCode value
     *
     * @return string|null
     */
    public function getCarrCode()
    {
        return $this->CarrCode;
    }

    /**
     * Set CarrCode value
     *
     * @param string $carrCode
     *
     * @return self
     */
    public function setCarrCode($carrCode = null)
    {
        // validation for constraint: string
        if (null !== $carrCode && !\is_string($carrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($carrCode, true), \gettype($carrCode)), __LINE__);
        }
        $this->CarrCode = $carrCode;
        return $this;
    }

    /**
     * Get CABCode value
     *
     * @return string|null
     */
    public function getCABCode()
    {
        return $this->CABCode;
    }

    /**
     * Set CABCode value
     *
     * @param string $cABCode
     *
     * @return self
     */
    public function setCABCode($cABCode = null)
    {
        // validation for constraint: string
        if (null !== $cABCode && !\is_string($cABCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cABCode, true), \gettype($cABCode)), __LINE__);
        }
        $this->CABCode = $cABCode;
        return $this;
    }

    /**
     * Get ZC value
     *
     * @return string|null
     */
    public function getZC()
    {
        return $this->ZC;
    }

    /**
     * Set ZC value
     *
     * @param string $zC
     *
     * @return self
     */
    public function setZC($zC = null)
    {
        // validation for constraint: string
        if (null !== $zC && !\is_string($zC)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($zC, true), \gettype($zC)), __LINE__);
        }
        $this->ZC = $zC;
        return $this;
    }

    /**
     * Get TNTAcnt value
     *
     * @return string|null
     */
    public function getTNTAcnt()
    {
        return $this->TNTAcnt;
    }

    /**
     * Set TNTAcnt value
     *
     * @param string $tNTAcnt
     *
     * @return self
     */
    public function setTNTAcnt($tNTAcnt = null)
    {
        // validation for constraint: string
        if (null !== $tNTAcnt && !\is_string($tNTAcnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTAcnt, true), \gettype($tNTAcnt)), __LINE__);
        }
        $this->TNTAcnt = $tNTAcnt;
        return $this;
    }

    /**
     * Get TNTCab value
     *
     * @return string|null
     */
    public function getTNTCab()
    {
        return $this->TNTCab;
    }

    /**
     * Set TNTCab value
     *
     * @param string $tNTCab
     *
     * @return self
     */
    public function setTNTCab($tNTCab = null)
    {
        // validation for constraint: string
        if (null !== $tNTCab && !\is_string($tNTCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTCab, true), \gettype($tNTCab)), __LINE__);
        }
        $this->TNTCab = $tNTCab;
        return $this;
    }

    /**
     * Get TNTDept value
     *
     * @return string|null
     */
    public function getTNTDept()
    {
        return $this->TNTDept;
    }

    /**
     * Set TNTDept value
     *
     * @param string $tNTDept
     *
     * @return self
     */
    public function setTNTDept($tNTDept = null)
    {
        // validation for constraint: string
        if (null !== $tNTDept && !\is_string($tNTDept)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTDept, true), \gettype($tNTDept)), __LINE__);
        }
        $this->TNTDept = $tNTDept;
        return $this;
    }

    /**
     * Get TNTPrd value
     *
     * @return string|null
     */
    public function getTNTPrd()
    {
        return $this->TNTPrd;
    }

    /**
     * Set TNTPrd value
     *
     * @param string $tNTPrd
     *
     * @return self
     */
    public function setTNTPrd($tNTPrd = null)
    {
        // validation for constraint: string
        if (null !== $tNTPrd && !\is_string($tNTPrd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTPrd, true), \gettype($tNTPrd)), __LINE__);
        }
        $this->TNTPrd = $tNTPrd;
        return $this;
    }

    /**
     * Get TNTVer value
     *
     * @return string|null
     */
    public function getTNTVer()
    {
        return $this->TNTVer;
    }

    /**
     * Set TNTVer value
     *
     * @param string $tNTVer
     *
     * @return self
     */
    public function setTNTVer($tNTVer = null)
    {
        // validation for constraint: string
        if (null !== $tNTVer && !\is_string($tNTVer)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTVer, true), \gettype($tNTVer)), __LINE__);
        }
        $this->TNTVer = $tNTVer;
        return $this;
    }

    /**
     * Get TNTComment1 value
     *
     * @return string|null
     */
    public function getTNTComment1()
    {
        return $this->TNTComment1;
    }

    /**
     * Set TNTComment1 value
     *
     * @param string $tNTComment1
     *
     * @return self
     */
    public function setTNTComment1($tNTComment1 = null)
    {
        // validation for constraint: string
        if (null !== $tNTComment1 && !\is_string($tNTComment1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment1, true), \gettype($tNTComment1)), __LINE__);
        }
        $this->TNTComment1 = $tNTComment1;
        return $this;
    }

    /**
     * Get TNTComment2 value
     *
     * @return string|null
     */
    public function getTNTComment2()
    {
        return $this->TNTComment2;
    }

    /**
     * Set TNTComment2 value
     *
     * @param string $tNTComment2
     *
     * @return self
     */
    public function setTNTComment2($tNTComment2 = null)
    {
        // validation for constraint: string
        if (null !== $tNTComment2 && !\is_string($tNTComment2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment2, true), \gettype($tNTComment2)), __LINE__);
        }
        $this->TNTComment2 = $tNTComment2;
        return $this;
    }

    /**
     * Get TNTComment3 value
     *
     * @return string|null
     */
    public function getTNTComment3()
    {
        return $this->TNTComment3;
    }

    /**
     * Set TNTComment3 value
     *
     * @param string $tNTComment3
     *
     * @return self
     */
    public function setTNTComment3($tNTComment3 = null)
    {
        // validation for constraint: string
        if (null !== $tNTComment3 && !\is_string($tNTComment3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment3, true), \gettype($tNTComment3)), __LINE__);
        }
        $this->TNTComment3 = $tNTComment3;
        return $this;
    }

    /**
     * Get TNTComment4 value
     *
     * @return string|null
     */
    public function getTNTComment4()
    {
        return $this->TNTComment4;
    }

    /**
     * Set TNTComment4 value
     *
     * @param string $tNTComment4
     *
     * @return self
     */
    public function setTNTComment4($tNTComment4 = null)
    {
        // validation for constraint: string
        if (null !== $tNTComment4 && !\is_string($tNTComment4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($tNTComment4, true), \gettype($tNTComment4)), __LINE__);
        }
        $this->TNTComment4 = $tNTComment4;
        return $this;
    }

    /**
     * Get CLPAcnt value
     *
     * @return string|null
     */
    public function getCLPAcnt()
    {
        return $this->CLPAcnt;
    }

    /**
     * Set CLPAcnt value
     *
     * @param string $cLPAcnt
     *
     * @return self
     */
    public function setCLPAcnt($cLPAcnt = null)
    {
        // validation for constraint: string
        if (null !== $cLPAcnt && !\is_string($cLPAcnt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPAcnt, true), \gettype($cLPAcnt)), __LINE__);
        }
        $this->CLPAcnt = $cLPAcnt;
        return $this;
    }

    /**
     * Get CLPFlwCab value
     *
     * @return string|null
     */
    public function getCLPFlwCab()
    {
        return $this->CLPFlwCab;
    }

    /**
     * Set CLPFlwCab value
     *
     * @param string $cLPFlwCab
     *
     * @return self
     */
    public function setCLPFlwCab($cLPFlwCab = null)
    {
        // validation for constraint: string
        if (null !== $cLPFlwCab && !\is_string($cLPFlwCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPFlwCab, true), \gettype($cLPFlwCab)), __LINE__);
        }
        $this->CLPFlwCab = $cLPFlwCab;
        return $this;
    }

    /**
     * Get CLPFlwCabPrt value
     *
     * @return string|null
     */
    public function getCLPFlwCabPrt()
    {
        return $this->CLPFlwCabPrt;
    }

    /**
     * Set CLPFlwCabPrt value
     *
     * @param string $cLPFlwCabPrt
     *
     * @return self
     */
    public function setCLPFlwCabPrt($cLPFlwCabPrt = null)
    {
        // validation for constraint: string
        if (null !== $cLPFlwCabPrt && !\is_string($cLPFlwCabPrt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPFlwCabPrt, true), \gettype($cLPFlwCabPrt)), __LINE__);
        }
        $this->CLPFlwCabPrt = $cLPFlwCabPrt;
        return $this;
    }

    /**
     * Get CLPPCHCab value
     *
     * @return string|null
     */
    public function getCLPPCHCab()
    {
        return $this->CLPPCHCab;
    }

    /**
     * Set CLPPCHCab value
     *
     * @param string $cLPPCHCab
     *
     * @return self
     */
    public function setCLPPCHCab($cLPPCHCab = null)
    {
        // validation for constraint: string
        if (null !== $cLPPCHCab && !\is_string($cLPPCHCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPCHCab, true), \gettype($cLPPCHCab)), __LINE__);
        }
        $this->CLPPCHCab = $cLPPCHCab;
        return $this;
    }

    /**
     * Get CLPPCHCabPrt value
     *
     * @return string|null
     */
    public function getCLPPCHCabPrt()
    {
        return $this->CLPPCHCabPrt;
    }

    /**
     * Set CLPPCHCabPrt value
     *
     * @param string $cLPPCHCabPrt
     *
     * @return self
     */
    public function setCLPPCHCabPrt($cLPPCHCabPrt = null)
    {
        // validation for constraint: string
        if (null !== $cLPPCHCabPrt && !\is_string($cLPPCHCabPrt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPCHCabPrt, true), \gettype($cLPPCHCabPrt)), __LINE__);
        }
        $this->CLPPCHCabPrt = $cLPPCHCabPrt;
        return $this;
    }

    /**
     * Get CLPSort value
     *
     * @return string|null
     */
    public function getCLPSort()
    {
        return $this->CLPSort;
    }

    /**
     * Set CLPSort value
     *
     * @param string $cLPSort
     *
     * @return self
     */
    public function setCLPSort($cLPSort = null)
    {
        // validation for constraint: string
        if (null !== $cLPSort && !\is_string($cLPSort)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPSort, true), \gettype($cLPSort)), __LINE__);
        }
        $this->CLPSort = $cLPSort;
        return $this;
    }

    /**
     * Get CLPPFCSite value
     *
     * @return string|null
     */
    public function getCLPPFCSite()
    {
        return $this->CLPPFCSite;
    }

    /**
     * Set CLPPFCSite value
     *
     * @param string $cLPPFCSite
     *
     * @return self
     */
    public function setCLPPFCSite($cLPPFCSite = null)
    {
        // validation for constraint: string
        if (null !== $cLPPFCSite && !\is_string($cLPPFCSite)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cLPPFCSite, true), \gettype($cLPPFCSite)), __LINE__);
        }
        $this->CLPPFCSite = $cLPPFCSite;
        return $this;
    }

    /**
     * Get RefCab value
     *
     * @return string|null
     */
    public function getRefCab()
    {
        return $this->RefCab;
    }

    /**
     * Set RefCab value
     *
     * @param string $refCab
     *
     * @return self
     */
    public function setRefCab($refCab = null)
    {
        // validation for constraint: string
        if (null !== $refCab && !\is_string($refCab)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($refCab, true), \gettype($refCab)), __LINE__);
        }
        $this->RefCab = $refCab;
        return $this;
    }

    /**
     * Get DestRefExt value
     *
     * @return string|null
     */
    public function getDestRefExt()
    {
        return $this->DestRefExt;
    }

    /**
     * Set DestRefExt value
     *
     * @param string $destRefExt
     *
     * @return self
     */
    public function setDestRefExt($destRefExt = null)
    {
        // validation for constraint: string
        if (null !== $destRefExt && !\is_string($destRefExt)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destRefExt, true), \gettype($destRefExt)), __LINE__);
        }
        $this->DestRefExt = $destRefExt;
        return $this;
    }

    /**
     * Get DestRef value
     *
     * @return string|null
     */
    public function getDestRef()
    {
        return $this->DestRef;
    }

    /**
     * Set DestRef value
     *
     * @param string $destRef
     *
     * @return self
     */
    public function setDestRef($destRef = null)
    {
        // validation for constraint: string
        if (null !== $destRef && !\is_string($destRef)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destRef, true), \gettype($destRef)), __LINE__);
        }
        $this->DestRef = $destRef;
        return $this;
    }

    /**
     * Get DestAddr value
     *
     * @return string|null
     */
    public function getDestAddr()
    {
        return $this->DestAddr;
    }

    /**
     * Set DestAddr value
     *
     * @param string $destAddr
     *
     * @return self
     */
    public function setDestAddr($destAddr = null)
    {
        // validation for constraint: string
        if (null !== $destAddr && !\is_string($destAddr)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destAddr, true), \gettype($destAddr)), __LINE__);
        }
        $this->DestAddr = $destAddr;
        return $this;
    }

    /**
     * Get DestZip value
     *
     * @return string|null
     */
    public function getDestZip()
    {
        return $this->DestZip;
    }

    /**
     * Set DestZip value
     *
     * @param string $destZip
     *
     * @return self
     */
    public function setDestZip($destZip = null)
    {
        // validation for constraint: string
        if (null !== $destZip && !\is_string($destZip)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destZip, true), \gettype($destZip)), __LINE__);
        }
        $this->DestZip = $destZip;
        return $this;
    }

    /**
     * Get DestCity value
     *
     * @return string|null
     */
    public function getDestCity()
    {
        return $this->DestCity;
    }

    /**
     * Set DestCity value
     *
     * @param string $destCity
     *
     * @return self
     */
    public function setDestCity($destCity = null)
    {
        // validation for constraint: string
        if (null !== $destCity && !\is_string($destCity)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destCity, true), \gettype($destCity)), __LINE__);
        }
        $this->DestCity = $destCity;
        return $this;
    }

    /**
     * Get MRCAB value
     *
     * @return string|null
     */
    public function getMRCAB()
    {
        return $this->MRCAB;
    }

    /**
     * Set MRCAB value
     *
     * @param string $mRCAB
     *
     * @return self
     */
    public function setMRCAB($mRCAB = null)
    {
        // validation for constraint: string
        if (null !== $mRCAB && !\is_string($mRCAB)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRCAB, true), \gettype($mRCAB)), __LINE__);
        }
        $this->MRCAB = $mRCAB;
        return $this;
    }

    /**
     * Get MRAgency value
     *
     * @return string|null
     */
    public function getMRAgency()
    {
        return $this->MRAgency;
    }

    /**
     * Set MRAgency value
     *
     * @param string $mRAgency
     *
     * @return self
     */
    public function setMRAgency($mRAgency = null)
    {
        // validation for constraint: string
        if (null !== $mRAgency && !\is_string($mRAgency)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRAgency, true), \gettype($mRAgency)), __LINE__);
        }
        $this->MRAgency = $mRAgency;
        return $this;
    }

    /**
     * Get MRRoundCode value
     *
     * @return string|null
     */
    public function getMRRoundCode()
    {
        return $this->MRRoundCode;
    }

    /**
     * Set MRRoundCode value
     *
     * @param string $mRRoundCode
     *
     * @return self
     */
    public function setMRRoundCode($mRRoundCode = null)
    {
        // validation for constraint: string
        if (null !== $mRRoundCode && !\is_string($mRRoundCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRRoundCode, true), \gettype($mRRoundCode)), __LINE__);
        }
        $this->MRRoundCode = $mRRoundCode;
        return $this;
    }

    /**
     * Get MRRefPudo value
     *
     * @return string|null
     */
    public function getMRRefPudo()
    {
        return $this->MRRefPudo;
    }

    /**
     * Set MRRefPudo value
     *
     * @param string $mRRefPudo
     *
     * @return self
     */
    public function setMRRefPudo($mRRefPudo = null)
    {
        // validation for constraint: string
        if (null !== $mRRefPudo && !\is_string($mRRefPudo)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRRefPudo, true), \gettype($mRRefPudo)), __LINE__);
        }
        $this->MRRefPudo = $mRRefPudo;
        return $this;
    }

    /**
     * Get MRPreTri value
     *
     * @return string|null
     */
    public function getMRPreTri()
    {
        return $this->MRPreTri;
    }

    /**
     * Set MRPreTri value
     *
     * @param string $mRPreTri
     *
     * @return self
     */
    public function setMRPreTri($mRPreTri = null)
    {
        // validation for constraint: string
        if (null !== $mRPreTri && !\is_string($mRPreTri)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRPreTri, true), \gettype($mRPreTri)), __LINE__);
        }
        $this->MRPreTri = $mRPreTri;
        return $this;
    }

    /**
     * Get MRLibPfd value
     *
     * @return string|null
     */
    public function getMRLibPfd()
    {
        return $this->MRLibPfd;
    }

    /**
     * Set MRLibPfd value
     *
     * @param string $mRLibPfd
     *
     * @return self
     */
    public function setMRLibPfd($mRLibPfd = null)
    {
        // validation for constraint: string
        if (null !== $mRLibPfd && !\is_string($mRLibPfd)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRLibPfd, true), \gettype($mRLibPfd)), __LINE__);
        }
        $this->MRLibPfd = $mRLibPfd;
        return $this;
    }

    /**
     * Get MRNoGroup value
     *
     * @return string|null
     */
    public function getMRNoGroup()
    {
        return $this->MRNoGroup;
    }

    /**
     * Set MRNoGroup value
     *
     * @param string $mRNoGroup
     *
     * @return self
     */
    public function setMRNoGroup($mRNoGroup = null)
    {
        // validation for constraint: string
        if (null !== $mRNoGroup && !\is_string($mRNoGroup)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRNoGroup, true), \gettype($mRNoGroup)), __LINE__);
        }
        $this->MRNoGroup = $mRNoGroup;
        return $this;
    }

    /**
     * Get MRNumExpe value
     *
     * @return string|null
     */
    public function getMRNumExpe()
    {
        return $this->MRNumExpe;
    }

    /**
     * Set MRNumExpe value
     *
     * @param string $mRNumExpe
     *
     * @return self
     */
    public function setMRNumExpe($mRNumExpe = null)
    {
        // validation for constraint: string
        if (null !== $mRNumExpe && !\is_string($mRNumExpe)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mRNumExpe, true), \gettype($mRNumExpe)), __LINE__);
        }
        $this->MRNumExpe = $mRNumExpe;
        return $this;
    }
}
