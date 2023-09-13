<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcel StructType
 */
class GetParcel extends AbstractStructBase
{
    /**
     * The GetParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetParcelRequest
     */
    public $GetParcelRequest;

    /**
     * Constructor method for GetParcel
     *
     * @uses GetParcel::setGetParcelRequest()
     */
    public function __construct(GetParcelRequest $getParcelRequest = null)
    {
        $this
            ->setGetParcelRequest($getParcelRequest)
        ;
    }

    /**
     * Get GetParcelRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetParcelRequest
     */
    public function getGetParcelRequest()
    {
        return $this->GetParcelRequest;
    }

    /**
     * Set GetParcelRequest value
     *
     * @return self
     */
    public function setGetParcelRequest(GetParcelRequest $getParcelRequest = null)
    {
        $this->GetParcelRequest = $getParcelRequest;
        return $this;
    }
}
