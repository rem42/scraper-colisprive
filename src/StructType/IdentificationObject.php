<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for IdentificationObject StructType
 */
class IdentificationObject extends AbstractStructBase
{
    /**
     * The CPCustoID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $CPCustoID;
    /**
     * The AccountID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $AccountID;

    /**
     * Constructor method for IdentificationObject
     *
     * @uses IdentificationObject::setCPCustoID()
     * @uses IdentificationObject::setAccountID()
     *
     * @param string $cPCustoID
     * @param string $accountID
     */
    public function __construct($cPCustoID = null, $accountID = null)
    {
        $this
            ->setCPCustoID($cPCustoID)
            ->setAccountID($accountID)
        ;
    }

    /**
     * Get CPCustoID value
     *
     * @return string
     */
    public function getCPCustoID()
    {
        return $this->CPCustoID;
    }

    /**
     * Set CPCustoID value
     *
     * @param string $cPCustoID
     *
     * @return self
     */
    public function setCPCustoID($cPCustoID = null)
    {
        // validation for constraint: string
        if (null !== $cPCustoID && !\is_string($cPCustoID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($cPCustoID, true), \gettype($cPCustoID)), __LINE__);
        }
        $this->CPCustoID = $cPCustoID;
        return $this;
    }

    /**
     * Get AccountID value
     *
     * @return string
     */
    public function getAccountID()
    {
        return $this->AccountID;
    }

    /**
     * Set AccountID value
     *
     * @param string $accountID
     *
     * @return self
     */
    public function setAccountID($accountID = null)
    {
        // validation for constraint: string
        if (null !== $accountID && !\is_string($accountID)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($accountID, true), \gettype($accountID)), __LINE__);
        }
        $this->AccountID = $accountID;
        return $this;
    }
}
