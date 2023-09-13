<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerReturn StructType
 */
class SetContainerReturn extends AbstractStructBase
{
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
     * The CntrCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CntrCode;
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
     * The CABCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $CABCode;

    /**
     * Constructor method for SetContainerReturn
     *
     * @uses SetContainerReturn::setWSResp()
     * @uses SetContainerReturn::setCntrCode()
     * @uses SetContainerReturn::setOrderID()
     * @uses SetContainerReturn::setLabelUrl()
     * @uses SetContainerReturn::setCABCode()
     *
     * @param string $cntrCode
     * @param string $orderID
     * @param string $labelUrl
     * @param string $cABCode
     */
    public function __construct(ResponseObject $wSResp = null, $cntrCode = null, $orderID = null, $labelUrl = null, $cABCode = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setCntrCode($cntrCode)
            ->setOrderID($orderID)
            ->setLabelUrl($labelUrl)
            ->setCABCode($cABCode)
        ;
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
     * Get CntrCode value
     *
     * @return string|null
     */
    public function getCntrCode()
    {
        return $this->CntrCode;
    }

    /**
     * Set CntrCode value
     *
     * @param string $cntrCode
     *
     * @return self
     */
    public function setCntrCode($cntrCode = null)
    {
        // validation for constraint: string
        if (null !== $cntrCode && !\is_string($cntrCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cntrCode, true), \gettype($cntrCode)), __LINE__);
        }
        $this->CntrCode = $cntrCode;
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
}
