<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for ResponseObject StructType
 */
class ResponseObject extends AbstractStructBase
{
    /**
     * The RtnCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     *
     * @var int
     */
    public $RtnCode;
    /**
     * The RtnMessage
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $RtnMessage;

    /**
     * Constructor method for ResponseObject
     *
     * @uses ResponseObject::setRtnCode()
     * @uses ResponseObject::setRtnMessage()
     *
     * @param int    $rtnCode
     * @param string $rtnMessage
     */
    public function __construct($rtnCode = null, $rtnMessage = null)
    {
        $this
            ->setRtnCode($rtnCode)
            ->setRtnMessage($rtnMessage)
        ;
    }

    /**
     * Get RtnCode value
     *
     * @return int
     */
    public function getRtnCode()
    {
        return $this->RtnCode;
    }

    /**
     * Set RtnCode value
     *
     * @param int $rtnCode
     *
     * @return self
     */
    public function setRtnCode($rtnCode = null)
    {
        // validation for constraint: int
        if (null !== $rtnCode && !(\is_int($rtnCode) || ctype_digit($rtnCode))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($rtnCode, true), \gettype($rtnCode)), __LINE__);
        }
        $this->RtnCode = $rtnCode;
        return $this;
    }

    /**
     * Get RtnMessage value
     *
     * @return string|null
     */
    public function getRtnMessage()
    {
        return $this->RtnMessage;
    }

    /**
     * Set RtnMessage value
     *
     * @param string $rtnMessage
     *
     * @return self
     */
    public function setRtnMessage($rtnMessage = null)
    {
        // validation for constraint: string
        if (null !== $rtnMessage && !\is_string($rtnMessage)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($rtnMessage, true), \gettype($rtnMessage)), __LINE__);
        }
        $this->RtnMessage = $rtnMessage;
        return $this;
    }
}
