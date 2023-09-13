<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatusRequest StructType
 */
class UpdateParcelStatusRequest extends AbstractStructBase
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
     * The CPPclCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CPPclCode;
    /**
     * The CsgZipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CsgZipCode;
    /**
     * The DestType
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $DestType;
    /**
     * The DestName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $DestName;
    /**
     * The NewStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $NewStatus;
    /**
     * The OldStatus
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $OldStatus;
    /**
     * The StatusChangeTime
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $StatusChangeTime;
    /**
     * The CourierIdCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CourierIdCode;
    /**
     * The ParcelSize
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ParcelSize;

    /**
     * Constructor method for UpdateParcelStatusRequest
     *
     * @uses UpdateParcelStatusRequest::setSecurityID()
     * @uses UpdateParcelStatusRequest::setCPPclCode()
     * @uses UpdateParcelStatusRequest::setCsgZipCode()
     * @uses UpdateParcelStatusRequest::setDestType()
     * @uses UpdateParcelStatusRequest::setDestName()
     * @uses UpdateParcelStatusRequest::setNewStatus()
     * @uses UpdateParcelStatusRequest::setOldStatus()
     * @uses UpdateParcelStatusRequest::setStatusChangeTime()
     * @uses UpdateParcelStatusRequest::setCourierIdCode()
     * @uses UpdateParcelStatusRequest::setParcelSize()
     *
     * @param string $cPPclCode
     * @param string $csgZipCode
     * @param string $destType
     * @param string $destName
     * @param string $newStatus
     * @param string $oldStatus
     * @param string $statusChangeTime
     * @param string $courierIdCode
     * @param string $parcelSize
     */
    public function __construct(IdentificationObject $securityID = null, $cPPclCode = null, $csgZipCode = null, $destType = null, $destName = null, $newStatus = null, $oldStatus = null, $statusChangeTime = null, $courierIdCode = null, $parcelSize = null)
    {
        $this
            ->setSecurityID($securityID)
            ->setCPPclCode($cPPclCode)
            ->setCsgZipCode($csgZipCode)
            ->setDestType($destType)
            ->setDestName($destName)
            ->setNewStatus($newStatus)
            ->setOldStatus($oldStatus)
            ->setStatusChangeTime($statusChangeTime)
            ->setCourierIdCode($courierIdCode)
            ->setParcelSize($parcelSize)
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
     * Get CPPclCode value
     *
     * @return string
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
     * Get CsgZipCode value
     *
     * @return string
     */
    public function getCsgZipCode()
    {
        return $this->CsgZipCode;
    }

    /**
     * Set CsgZipCode value
     *
     * @param string $csgZipCode
     *
     * @return self
     */
    public function setCsgZipCode($csgZipCode = null)
    {
        // validation for constraint: string
        if (null !== $csgZipCode && !\is_string($csgZipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($csgZipCode, true), \gettype($csgZipCode)), __LINE__);
        }
        $this->CsgZipCode = $csgZipCode;
        return $this;
    }

    /**
     * Get DestType value
     *
     * @return string
     */
    public function getDestType()
    {
        return $this->DestType;
    }

    /**
     * Set DestType value
     *
     * @param string $destType
     *
     * @return self
     */
    public function setDestType($destType = null)
    {
        // validation for constraint: string
        if (null !== $destType && !\is_string($destType)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destType, true), \gettype($destType)), __LINE__);
        }
        $this->DestType = $destType;
        return $this;
    }

    /**
     * Get DestName value
     *
     * @return string
     */
    public function getDestName()
    {
        return $this->DestName;
    }

    /**
     * Set DestName value
     *
     * @param string $destName
     *
     * @return self
     */
    public function setDestName($destName = null)
    {
        // validation for constraint: string
        if (null !== $destName && !\is_string($destName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($destName, true), \gettype($destName)), __LINE__);
        }
        $this->DestName = $destName;
        return $this;
    }

    /**
     * Get NewStatus value
     *
     * @return string
     */
    public function getNewStatus()
    {
        return $this->NewStatus;
    }

    /**
     * Set NewStatus value
     *
     * @param string $newStatus
     *
     * @return self
     */
    public function setNewStatus($newStatus = null)
    {
        // validation for constraint: string
        if (null !== $newStatus && !\is_string($newStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($newStatus, true), \gettype($newStatus)), __LINE__);
        }
        $this->NewStatus = $newStatus;
        return $this;
    }

    /**
     * Get OldStatus value
     *
     * @return string
     */
    public function getOldStatus()
    {
        return $this->OldStatus;
    }

    /**
     * Set OldStatus value
     *
     * @param string $oldStatus
     *
     * @return self
     */
    public function setOldStatus($oldStatus = null)
    {
        // validation for constraint: string
        if (null !== $oldStatus && !\is_string($oldStatus)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($oldStatus, true), \gettype($oldStatus)), __LINE__);
        }
        $this->OldStatus = $oldStatus;
        return $this;
    }

    /**
     * Get StatusChangeTime value
     *
     * @return string
     */
    public function getStatusChangeTime()
    {
        return $this->StatusChangeTime;
    }

    /**
     * Set StatusChangeTime value
     *
     * @param string $statusChangeTime
     *
     * @return self
     */
    public function setStatusChangeTime($statusChangeTime = null)
    {
        // validation for constraint: string
        if (null !== $statusChangeTime && !\is_string($statusChangeTime)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($statusChangeTime, true), \gettype($statusChangeTime)), __LINE__);
        }
        $this->StatusChangeTime = $statusChangeTime;
        return $this;
    }

    /**
     * Get CourierIdCode value
     *
     * @return string
     */
    public function getCourierIdCode()
    {
        return $this->CourierIdCode;
    }

    /**
     * Set CourierIdCode value
     *
     * @param string $courierIdCode
     *
     * @return self
     */
    public function setCourierIdCode($courierIdCode = null)
    {
        // validation for constraint: string
        if (null !== $courierIdCode && !\is_string($courierIdCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($courierIdCode, true), \gettype($courierIdCode)), __LINE__);
        }
        $this->CourierIdCode = $courierIdCode;
        return $this;
    }

    /**
     * Get ParcelSize value
     *
     * @return string|null
     */
    public function getParcelSize()
    {
        return $this->ParcelSize;
    }

    /**
     * Set ParcelSize value
     *
     * @param string $parcelSize
     *
     * @return self
     */
    public function setParcelSize($parcelSize = null)
    {
        // validation for constraint: string
        if (null !== $parcelSize && !\is_string($parcelSize)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($parcelSize, true), \gettype($parcelSize)), __LINE__);
        }
        $this->ParcelSize = $parcelSize;
        return $this;
    }
}
