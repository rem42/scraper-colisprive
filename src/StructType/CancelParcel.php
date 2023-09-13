<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for CancelParcel StructType
 */
class CancelParcel extends AbstractStructBase
{
    /**
     * The CancelParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\CancelParcelRequest
     */
    public $CancelParcelRequest;

    /**
     * Constructor method for CancelParcel
     *
     * @uses CancelParcel::setCancelParcelRequest()
     */
    public function __construct(CancelParcelRequest $cancelParcelRequest = null)
    {
        $this
            ->setCancelParcelRequest($cancelParcelRequest)
        ;
    }

    /**
     * Get CancelParcelRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\CancelParcelRequest
     */
    public function getCancelParcelRequest()
    {
        return $this->CancelParcelRequest;
    }

    /**
     * Set CancelParcelRequest value
     *
     * @return self
     */
    public function setCancelParcelRequest(CancelParcelRequest $cancelParcelRequest = null)
    {
        $this->CancelParcelRequest = $cancelParcelRequest;
        return $this;
    }
}
