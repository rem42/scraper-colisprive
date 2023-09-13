<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for AuthenticationHeader StructType
 * Meta information extracted from the WSDL
 * - type: tns:AuthenticationHeader
 */
class AuthenticationHeader extends AbstractStructBase
{
    /**
     * The UserName
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $UserName;
    /**
     * The Password
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var string
     */
    public $Password;

    /**
     * Constructor method for AuthenticationHeader
     *
     * @uses AuthenticationHeader::setUserName()
     * @uses AuthenticationHeader::setPassword()
     *
     * @param string $userName
     * @param string $password
     */
    public function __construct($userName = null, $password = null)
    {
        $this
            ->setUserName($userName)
            ->setPassword($password)
        ;
    }

    /**
     * Get UserName value
     *
     * @return string
     */
    public function getUserName()
    {
        return $this->UserName;
    }

    /**
     * Set UserName value
     *
     * @param string $userName
     *
     * @return self
     */
    public function setUserName($userName = null)
    {
        // validation for constraint: string
        if (null !== $userName && !\is_string($userName)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($userName, true), \gettype($userName)), __LINE__);
        }
        $this->UserName = $userName;
        return $this;
    }

    /**
     * Get Password value
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Set Password value
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword($password = null)
    {
        // validation for constraint: string
        if (null !== $password && !\is_string($password)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($password, true), \gettype($password)), __LINE__);
        }
        $this->Password = $password;
        return $this;
    }
}
