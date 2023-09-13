<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for StatusObject StructType
 */
class StatusObject extends AbstractStructBase
{
    /**
     * The StsDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $StsDate;
    /**
     * The StsCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $StsCode;
    /**
     * The StsDesc
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $StsDesc;

    /**
     * Constructor method for StatusObject
     *
     * @uses StatusObject::setStsDate()
     * @uses StatusObject::setStsCode()
     * @uses StatusObject::setStsDesc()
     *
     * @param string $stsDate
     * @param string $stsCode
     * @param string $stsDesc
     */
    public function __construct($stsDate = null, $stsCode = null, $stsDesc = null)
    {
        $this
            ->setStsDate($stsDate)
            ->setStsCode($stsCode)
            ->setStsDesc($stsDesc)
        ;
    }

    /**
     * Get StsDate value
     *
     * @return string|null
     */
    public function getStsDate()
    {
        return $this->StsDate;
    }

    /**
     * Set StsDate value
     *
     * @param string $stsDate
     *
     * @return self
     */
    public function setStsDate($stsDate = null)
    {
        // validation for constraint: string
        if (null !== $stsDate && !\is_string($stsDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsDate, true), \gettype($stsDate)), __LINE__);
        }
        $this->StsDate = $stsDate;
        return $this;
    }

    /**
     * Get StsCode value
     *
     * @return string|null
     */
    public function getStsCode()
    {
        return $this->StsCode;
    }

    /**
     * Set StsCode value
     *
     * @param string $stsCode
     *
     * @return self
     */
    public function setStsCode($stsCode = null)
    {
        // validation for constraint: string
        if (null !== $stsCode && !\is_string($stsCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsCode, true), \gettype($stsCode)), __LINE__);
        }
        $this->StsCode = $stsCode;
        return $this;
    }

    /**
     * Get StsDesc value
     *
     * @return string|null
     */
    public function getStsDesc()
    {
        return $this->StsDesc;
    }

    /**
     * Set StsDesc value
     *
     * @param string $stsDesc
     *
     * @return self
     */
    public function setStsDesc($stsDesc = null)
    {
        // validation for constraint: string
        if (null !== $stsDesc && !\is_string($stsDesc)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($stsDesc, true), \gettype($stsDesc)), __LINE__);
        }
        $this->StsDesc = $stsDesc;
        return $this;
    }
}
