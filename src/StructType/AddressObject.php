<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AddressObject StructType
 */
class AddressObject extends AbstractStructBase
{
    /**
     * The Company
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $Company;
    /**
     * The Add1
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $Add1;
    /**
     * The ZC
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $ZC;
    /**
     * The City
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $City;
    /**
     * The Country
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $Country;
    /**
     * The Add2
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Add2;
    /**
     * The Add3
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Add3;
    /**
     * The Add4
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $Add4;
    /**
     * The GPSCoord
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\LocalizationObject
     */
    public $GPSCoord;

    /**
     * Constructor method for AddressObject
     *
     * @uses AddressObject::setCompany()
     * @uses AddressObject::setAdd1()
     * @uses AddressObject::setZC()
     * @uses AddressObject::setCity()
     * @uses AddressObject::setCountry()
     * @uses AddressObject::setAdd2()
     * @uses AddressObject::setAdd3()
     * @uses AddressObject::setAdd4()
     * @uses AddressObject::setGPSCoord()
     *
     * @param string $company
     * @param string $add1
     * @param string $zC
     * @param string $city
     * @param string $country
     * @param string $add2
     * @param string $add3
     * @param string $add4
     */
    public function __construct($company = null, $add1 = null, $zC = null, $city = null, $country = null, $add2 = null, $add3 = null, $add4 = null, LocalizationObject $gPSCoord = null)
    {
        $this
            ->setCompany($company)
            ->setAdd1($add1)
            ->setZC($zC)
            ->setCity($city)
            ->setCountry($country)
            ->setAdd2($add2)
            ->setAdd3($add3)
            ->setAdd4($add4)
            ->setGPSCoord($gPSCoord)
        ;
    }

    /**
     * Get Company value
     *
     * @return string
     */
    public function getCompany()
    {
        return $this->Company;
    }

    /**
     * Set Company value
     *
     * @param string $company
     *
     * @return self
     */
    public function setCompany($company = null)
    {
        // validation for constraint: string
        if (null !== $company && !\is_string($company)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($company, true), \gettype($company)), __LINE__);
        }
        $this->Company = $company;
        return $this;
    }

    /**
     * Get Add1 value
     *
     * @return string
     */
    public function getAdd1()
    {
        return $this->Add1;
    }

    /**
     * Set Add1 value
     *
     * @param string $add1
     *
     * @return self
     */
    public function setAdd1($add1 = null)
    {
        // validation for constraint: string
        if (null !== $add1 && !\is_string($add1)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add1, true), \gettype($add1)), __LINE__);
        }
        $this->Add1 = $add1;
        return $this;
    }

    /**
     * Get ZC value
     *
     * @return string
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
     * Get City value
     *
     * @return string
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Set City value
     *
     * @param string $city
     *
     * @return self
     */
    public function setCity($city = null)
    {
        // validation for constraint: string
        if (null !== $city && !\is_string($city)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($city, true), \gettype($city)), __LINE__);
        }
        $this->City = $city;
        return $this;
    }

    /**
     * Get Country value
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * Set Country value
     *
     * @param string $country
     *
     * @return self
     */
    public function setCountry($country = null)
    {
        // validation for constraint: string
        if (null !== $country && !\is_string($country)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($country, true), \gettype($country)), __LINE__);
        }
        $this->Country = $country;
        return $this;
    }

    /**
     * Get Add2 value
     *
     * @return string|null
     */
    public function getAdd2()
    {
        return $this->Add2;
    }

    /**
     * Set Add2 value
     *
     * @param string $add2
     *
     * @return self
     */
    public function setAdd2($add2 = null)
    {
        // validation for constraint: string
        if (null !== $add2 && !\is_string($add2)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add2, true), \gettype($add2)), __LINE__);
        }
        $this->Add2 = $add2;
        return $this;
    }

    /**
     * Get Add3 value
     *
     * @return string|null
     */
    public function getAdd3()
    {
        return $this->Add3;
    }

    /**
     * Set Add3 value
     *
     * @param string $add3
     *
     * @return self
     */
    public function setAdd3($add3 = null)
    {
        // validation for constraint: string
        if (null !== $add3 && !\is_string($add3)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add3, true), \gettype($add3)), __LINE__);
        }
        $this->Add3 = $add3;
        return $this;
    }

    /**
     * Get Add4 value
     *
     * @return string|null
     */
    public function getAdd4()
    {
        return $this->Add4;
    }

    /**
     * Set Add4 value
     *
     * @param string $add4
     *
     * @return self
     */
    public function setAdd4($add4 = null)
    {
        // validation for constraint: string
        if (null !== $add4 && !\is_string($add4)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($add4, true), \gettype($add4)), __LINE__);
        }
        $this->Add4 = $add4;
        return $this;
    }

    /**
     * Get GPSCoord value
     *
     * @return \Scraper\ScraperColisPrive\StructType\LocalizationObject|null
     */
    public function getGPSCoord()
    {
        return $this->GPSCoord;
    }

    /**
     * Set GPSCoord value
     *
     * @return self
     */
    public function setGPSCoord(LocalizationObject $gPSCoord = null)
    {
        $this->GPSCoord = $gPSCoord;
        return $this;
    }
}
