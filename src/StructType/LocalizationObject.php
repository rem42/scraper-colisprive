<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for LocalizationObject StructType
 */
class LocalizationObject extends AbstractStructBase
{
    /**
     * The Lat
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $Lat;
    /**
     * The Long
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var float
     */
    public $Long;

    /**
     * Constructor method for LocalizationObject
     *
     * @uses LocalizationObject::setLat()
     * @uses LocalizationObject::setLong()
     *
     * @param float $lat
     * @param float $long
     */
    public function __construct($lat = null, $long = null)
    {
        $this
            ->setLat($lat)
            ->setLong($long)
        ;
    }

    /**
     * Get Lat value
     *
     * @return float
     */
    public function getLat()
    {
        return $this->Lat;
    }

    /**
     * Set Lat value
     *
     * @param float $lat
     *
     * @return self
     */
    public function setLat($lat = null)
    {
        // validation for constraint: float
        if (null !== $lat && !(\is_float($lat) || is_numeric($lat))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($lat, true), \gettype($lat)), __LINE__);
        }
        $this->Lat = $lat;
        return $this;
    }

    /**
     * Get Long value
     *
     * @return float
     */
    public function getLong()
    {
        return $this->Long;
    }

    /**
     * Set Long value
     *
     * @param float $long
     *
     * @return self
     */
    public function setLong($long = null)
    {
        // validation for constraint: float
        if (null !== $long && !(\is_float($long) || is_numeric($long))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($long, true), \gettype($long)), __LINE__);
        }
        $this->Long = $long;
        return $this;
    }
}
