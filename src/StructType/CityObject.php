<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CityObject StructType
 */
class CityObject extends AbstractStructBase
{
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
     * The CityName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CityName;

    /**
     * Constructor method for CityObject
     *
     * @uses CityObject::setZC()
     * @uses CityObject::setCityName()
     *
     * @param string $zC
     * @param string $cityName
     */
    public function __construct($zC = null, $cityName = null)
    {
        $this
            ->setZC($zC)
            ->setCityName($cityName)
        ;
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
     * Get CityName value
     *
     * @return string|null
     */
    public function getCityName()
    {
        return $this->CityName;
    }

    /**
     * Set CityName value
     *
     * @param string $cityName
     *
     * @return self
     */
    public function setCityName($cityName = null)
    {
        // validation for constraint: string
        if (null !== $cityName && !\is_string($cityName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cityName, true), \gettype($cityName)), __LINE__);
        }
        $this->CityName = $cityName;
        return $this;
    }
}
