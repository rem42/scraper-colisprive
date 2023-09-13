<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetParcelResponse StructType
 */
class GetParcelResponse extends AbstractStructBase
{
    /**
     * The GetParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\GetParcelReturn
     */
    public $GetParcelResult;

    /**
     * Constructor method for GetParcelResponse
     *
     * @uses GetParcelResponse::setGetParcelResult()
     */
    public function __construct(GetParcelReturn $getParcelResult = null)
    {
        $this
            ->setGetParcelResult($getParcelResult)
        ;
    }

    /**
     * Get GetParcelResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\GetParcelReturn|null
     */
    public function getGetParcelResult()
    {
        return $this->GetParcelResult;
    }

    /**
     * Set GetParcelResult value
     *
     * @return self
     */
    public function setGetParcelResult(GetParcelReturn $getParcelResult = null)
    {
        $this->GetParcelResult = $getParcelResult;
        return $this;
    }
}
