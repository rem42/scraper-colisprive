<?php

namespace Scraper\ScraperColisPrive\ServiceType;

use WsdlToPhp\PackageBase\AbstractSoapClientBase;

/**
 * This class stands for Setnd ServiceType
 */
class Setnd extends AbstractSoapClientBase
{
    /**
     * Sets the AuthenticationHeader SoapHeader param
     *
     * @uses AbstractSoapClientBase::setSoapHeader()
     *
     * @param string $nameSpace
     * @param bool   $mustUnderstand
     * @param string $actor
     *
     * @return bool
     */
    public function setSoapHeaderAuthenticationHeader(\Scraper\ScraperColisPrive\StructType\AuthenticationHeader $authenticationHeader, $nameSpace = 'http://colisprive.com/externe/1.0/', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AuthenticationHeader', $authenticationHeader, $mustUnderstand, $actor);
    }

    /**
     * Method to call the operation originally named Set2ndDelivery
     * Meta information extracted from the WSDL
     * - SOAPHeaderNames: AuthenticationHeader
     * - SOAPHeaderNamespaces: http://colisprive.com/externe/1.0/
     * - SOAPHeaderTypes: \Scraper\ScraperColisPrive\StructType\AuthenticationHeader
     * - SOAPHeaders: required
     * - documentation: Permet de fournir toutes les informations relatives à la replanification de la livraison d'un colis.
     *
     * @uses AbstractSoapClientBase::getSoapClient()
     * @uses AbstractSoapClientBase::setResult()
     * @uses AbstractSoapClientBase::getResult()
     * @uses AbstractSoapClientBase::saveLastError()
     *
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryResponse|bool
     */
    public function Set2ndDelivery(\Scraper\ScraperColisPrive\StructType\Set2ndDelivery $parameters)
    {
        try {
            $this->setResult($this->getSoapClient()->Set2ndDelivery($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }

    /**
     * Returns the result
     *
     * @see AbstractSoapClientBase::getResult()
     *
     * @return \Scraper\ScraperColisPrive\StructType\Set2ndDeliveryResponse
     */
    public function getResult()
    {
        return parent::getResult();
    }
}
