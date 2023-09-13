<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for DeliveryDateObject StructType
 */
class DeliveryDateObject extends AbstractStructBase
{
    /**
     * The DlvrTimeF
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var string
     */
    public $DlvrTimeF;
    /**
     * The DlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $DlvrDate;

    /**
     * Constructor method for DeliveryDateObject
     *
     * @uses DeliveryDateObject::setDlvrTimeF()
     * @uses DeliveryDateObject::setDlvrDate()
     *
     * @param string $dlvrTimeF
     * @param string $dlvrDate
     */
    public function __construct($dlvrTimeF = null, $dlvrDate = null)
    {
        $this
            ->setDlvrTimeF($dlvrTimeF)
            ->setDlvrDate($dlvrDate)
        ;
    }

    /**
     * Get DlvrTimeF value
     *
     * @return string
     */
    public function getDlvrTimeF()
    {
        return $this->DlvrTimeF;
    }

    /**
     * Set DlvrTimeF value
     *
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::valueIsValid()
     * @uses \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::getValidValues()
     *
     * @param string $dlvrTimeF
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setDlvrTimeF($dlvrTimeF = null)
    {
        // validation for constraint: enumeration
        if (!\Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::valueIsValid($dlvrTimeF)) {
            throw new \InvalidArgumentException(sprintf('Invalid value(s) %s, please use one of: %s from enumeration class \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame', \is_array($dlvrTimeF) ? implode(', ', $dlvrTimeF) : var_export($dlvrTimeF, true), implode(', ', \Scraper\ScraperColisPrive\EnumType\EnumDeliveryTimeFrame::getValidValues())), __LINE__);
        }
        $this->DlvrTimeF = $dlvrTimeF;
        return $this;
    }

    /**
     * Get DlvrDate value
     *
     * @return string|null
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
