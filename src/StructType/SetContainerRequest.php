<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerRequest StructType
 */
class SetContainerRequest extends AbstractStructBase
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
     * The LabelFormat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $LabelFormat;
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
     * Constructor method for SetContainerRequest
     *
     * @uses SetContainerRequest::setSecurityID()
     * @uses SetContainerRequest::setLabelFormat()
     * @uses SetContainerRequest::setSubAcc()
     *
     * @param string $labelFormat
     * @param string $subAcc
     */
    public function __construct(IdentificationObject $securityID = null, $labelFormat = null, $subAcc = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setLabelFormat($labelFormat)
            ->setSubAcc($subAcc)
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
}
