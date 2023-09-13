<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcelResponse StructType
 */
class CancelParcelResponse extends AbstractStructBase
{
    /**
     * The CancelParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\CancelParcelReturn
     */
    public $CancelParcelResult;

    /**
     * Constructor method for CancelParcelResponse
     *
     * @uses CancelParcelResponse::setCancelParcelResult()
     */
    public function __construct(CancelParcelReturn $cancelParcelResult = null)
    {
        $this
            ->setCancelParcelResult($cancelParcelResult)
        ;
    }

    /**
     * Get CancelParcelResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\CancelParcelReturn|null
     */
    public function getCancelParcelResult()
    {
        return $this->CancelParcelResult;
    }

    /**
     * Set CancelParcelResult value
     *
     * @return self
     */
    public function setCancelParcelResult(CancelParcelReturn $cancelParcelResult = null)
    {
        $this->CancelParcelResult = $cancelParcelResult;
        return $this;
    }
}
