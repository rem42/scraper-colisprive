<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for PickupPointObject StructType
 */
class PickupPointObject extends AbstractStructBase
{
    /**
     * The PckCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckCode;
    /**
     * The PckName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckName;
    /**
     * The PckAdd
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\AddressObject
     */
    public $PckAdd;
    /**
     * The PckPict
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckPict;
    /**
     * The PckLocHints
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckLocHints;
    /**
     * The PckMonHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckMonHrs;
    /**
     * The PckTueHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckTueHrs;
    /**
     * The PckWedHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckWedHrs;
    /**
     * The PckThuHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckThuHrs;
    /**
     * The PckFriHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckFriHrs;
    /**
     * The PckSatHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckSatHrs;
    /**
     * The PckSunHrs
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $PckSunHrs;

    /**
     * Constructor method for PickupPointObject
     *
     * @uses PickupPointObject::setPckCode()
     * @uses PickupPointObject::setPckName()
     * @uses PickupPointObject::setPckAdd()
     * @uses PickupPointObject::setPckPict()
     * @uses PickupPointObject::setPckLocHints()
     * @uses PickupPointObject::setPckMonHrs()
     * @uses PickupPointObject::setPckTueHrs()
     * @uses PickupPointObject::setPckWedHrs()
     * @uses PickupPointObject::setPckThuHrs()
     * @uses PickupPointObject::setPckFriHrs()
     * @uses PickupPointObject::setPckSatHrs()
     * @uses PickupPointObject::setPckSunHrs()
     *
     * @param string $pckCode
     * @param string $pckName
     * @param string $pckPict
     * @param string $pckLocHints
     * @param string $pckMonHrs
     * @param string $pckTueHrs
     * @param string $pckWedHrs
     * @param string $pckThuHrs
     * @param string $pckFriHrs
     * @param string $pckSatHrs
     * @param string $pckSunHrs
     */
    public function __construct($pckCode = null, $pckName = null, AddressObject $pckAdd = null, $pckPict = null, $pckLocHints = null, $pckMonHrs = null, $pckTueHrs = null, $pckWedHrs = null, $pckThuHrs = null, $pckFriHrs = null, $pckSatHrs = null, $pckSunHrs = null)
    {
        $this
            ->setPckCode($pckCode)
            ->setPckName($pckName)
            ->setPckAdd($pckAdd)
            ->setPckPict($pckPict)
            ->setPckLocHints($pckLocHints)
            ->setPckMonHrs($pckMonHrs)
            ->setPckTueHrs($pckTueHrs)
            ->setPckWedHrs($pckWedHrs)
            ->setPckThuHrs($pckThuHrs)
            ->setPckFriHrs($pckFriHrs)
            ->setPckSatHrs($pckSatHrs)
            ->setPckSunHrs($pckSunHrs)
        ;
    }

    /**
     * Get PckCode value
     *
     * @return string|null
     */
    public function getPckCode()
    {
        return $this->PckCode;
    }

    /**
     * Set PckCode value
     *
     * @param string $pckCode
     *
     * @return self
     */
    public function setPckCode($pckCode = null)
    {
        // validation for constraint: string
        if (null !== $pckCode && !\is_string($pckCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckCode, true), \gettype($pckCode)), __LINE__);
        }
        $this->PckCode = $pckCode;
        return $this;
    }

    /**
     * Get PckName value
     *
     * @return string|null
     */
    public function getPckName()
    {
        return $this->PckName;
    }

    /**
     * Set PckName value
     *
     * @param string $pckName
     *
     * @return self
     */
    public function setPckName($pckName = null)
    {
        // validation for constraint: string
        if (null !== $pckName && !\is_string($pckName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckName, true), \gettype($pckName)), __LINE__);
        }
        $this->PckName = $pckName;
        return $this;
    }

    /**
     * Get PckAdd value
     *
     * @return \Scraper\ScraperColisPrive\StructType\AddressObject|null
     */
    public function getPckAdd()
    {
        return $this->PckAdd;
    }

    /**
     * Set PckAdd value
     *
     * @return self
     */
    public function setPckAdd(AddressObject $pckAdd = null)
    {
        $this->PckAdd = $pckAdd;
        return $this;
    }

    /**
     * Get PckPict value
     *
     * @return string|null
     */
    public function getPckPict()
    {
        return $this->PckPict;
    }

    /**
     * Set PckPict value
     *
     * @param string $pckPict
     *
     * @return self
     */
    public function setPckPict($pckPict = null)
    {
        // validation for constraint: string
        if (null !== $pckPict && !\is_string($pckPict)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckPict, true), \gettype($pckPict)), __LINE__);
        }
        $this->PckPict = $pckPict;
        return $this;
    }

    /**
     * Get PckLocHints value
     *
     * @return string|null
     */
    public function getPckLocHints()
    {
        return $this->PckLocHints;
    }

    /**
     * Set PckLocHints value
     *
     * @param string $pckLocHints
     *
     * @return self
     */
    public function setPckLocHints($pckLocHints = null)
    {
        // validation for constraint: string
        if (null !== $pckLocHints && !\is_string($pckLocHints)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckLocHints, true), \gettype($pckLocHints)), __LINE__);
        }
        $this->PckLocHints = $pckLocHints;
        return $this;
    }

    /**
     * Get PckMonHrs value
     *
     * @return string|null
     */
    public function getPckMonHrs()
    {
        return $this->PckMonHrs;
    }

    /**
     * Set PckMonHrs value
     *
     * @param string $pckMonHrs
     *
     * @return self
     */
    public function setPckMonHrs($pckMonHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckMonHrs && !\is_string($pckMonHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckMonHrs, true), \gettype($pckMonHrs)), __LINE__);
        }
        $this->PckMonHrs = $pckMonHrs;
        return $this;
    }

    /**
     * Get PckTueHrs value
     *
     * @return string|null
     */
    public function getPckTueHrs()
    {
        return $this->PckTueHrs;
    }

    /**
     * Set PckTueHrs value
     *
     * @param string $pckTueHrs
     *
     * @return self
     */
    public function setPckTueHrs($pckTueHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckTueHrs && !\is_string($pckTueHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckTueHrs, true), \gettype($pckTueHrs)), __LINE__);
        }
        $this->PckTueHrs = $pckTueHrs;
        return $this;
    }

    /**
     * Get PckWedHrs value
     *
     * @return string|null
     */
    public function getPckWedHrs()
    {
        return $this->PckWedHrs;
    }

    /**
     * Set PckWedHrs value
     *
     * @param string $pckWedHrs
     *
     * @return self
     */
    public function setPckWedHrs($pckWedHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckWedHrs && !\is_string($pckWedHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckWedHrs, true), \gettype($pckWedHrs)), __LINE__);
        }
        $this->PckWedHrs = $pckWedHrs;
        return $this;
    }

    /**
     * Get PckThuHrs value
     *
     * @return string|null
     */
    public function getPckThuHrs()
    {
        return $this->PckThuHrs;
    }

    /**
     * Set PckThuHrs value
     *
     * @param string $pckThuHrs
     *
     * @return self
     */
    public function setPckThuHrs($pckThuHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckThuHrs && !\is_string($pckThuHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckThuHrs, true), \gettype($pckThuHrs)), __LINE__);
        }
        $this->PckThuHrs = $pckThuHrs;
        return $this;
    }

    /**
     * Get PckFriHrs value
     *
     * @return string|null
     */
    public function getPckFriHrs()
    {
        return $this->PckFriHrs;
    }

    /**
     * Set PckFriHrs value
     *
     * @param string $pckFriHrs
     *
     * @return self
     */
    public function setPckFriHrs($pckFriHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckFriHrs && !\is_string($pckFriHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckFriHrs, true), \gettype($pckFriHrs)), __LINE__);
        }
        $this->PckFriHrs = $pckFriHrs;
        return $this;
    }

    /**
     * Get PckSatHrs value
     *
     * @return string|null
     */
    public function getPckSatHrs()
    {
        return $this->PckSatHrs;
    }

    /**
     * Set PckSatHrs value
     *
     * @param string $pckSatHrs
     *
     * @return self
     */
    public function setPckSatHrs($pckSatHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckSatHrs && !\is_string($pckSatHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckSatHrs, true), \gettype($pckSatHrs)), __LINE__);
        }
        $this->PckSatHrs = $pckSatHrs;
        return $this;
    }

    /**
     * Get PckSunHrs value
     *
     * @return string|null
     */
    public function getPckSunHrs()
    {
        return $this->PckSunHrs;
    }

    /**
     * Set PckSunHrs value
     *
     * @param string $pckSunHrs
     *
     * @return self
     */
    public function setPckSunHrs($pckSunHrs = null)
    {
        // validation for constraint: string
        if (null !== $pckSunHrs && !\is_string($pckSunHrs)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($pckSunHrs, true), \gettype($pckSunHrs)), __LINE__);
        }
        $this->PckSunHrs = $pckSunHrs;
        return $this;
    }
}
