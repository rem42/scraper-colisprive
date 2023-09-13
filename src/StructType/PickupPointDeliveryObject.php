<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupPointDeliveryObject StructType
 */
class PickupPointDeliveryObject extends AbstractStructBase
{
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
     * The PlannedDlvrDate
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PlannedDlvrDate;

    /**
     * Constructor method for PickupPointDeliveryObject
     *
     * @uses PickupPointDeliveryObject::setPckPoint()
     * @uses PickupPointDeliveryObject::setPlannedDlvrDate()
     *
     * @param string $plannedDlvrDate
     */
    public function __construct(PickupPointObject $pckPoint = null, $plannedDlvrDate = null)
    {
        $this
            ->setPckPoint($pckPoint)
            ->setPlannedDlvrDate($plannedDlvrDate)
        ;
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
     * Get PlannedDlvrDate value
     *
     * @return string|null
     */
    public function getPlannedDlvrDate()
    {
        return $this->PlannedDlvrDate;
    }

    /**
     * Set PlannedDlvrDate value
     *
     * @param string $plannedDlvrDate
     *
     * @return self
     */
    public function setPlannedDlvrDate($plannedDlvrDate = null)
    {
        // validation for constraint: string
        if (null !== $plannedDlvrDate && !\is_string($plannedDlvrDate)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($plannedDlvrDate, true), \gettype($plannedDlvrDate)), __LINE__);
        }
        $this->PlannedDlvrDate = $plannedDlvrDate;
        return $this;
    }
}
