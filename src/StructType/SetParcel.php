<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcel StructType
 */
class SetParcel extends AbstractStructBase
{
    /**
     * The SetParcelRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetParcelRequest
     */
    public $SetParcelRequest;

    /**
     * Constructor method for SetParcel
     *
     * @uses SetParcel::setSetParcelRequest()
     */
    public function __construct(SetParcelRequest $setParcelRequest = null)
    {
        $this
            ->setSetParcelRequest($setParcelRequest)
        ;
    }

    /**
     * Get SetParcelRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetParcelRequest
     */
    public function getSetParcelRequest()
    {
        return $this->SetParcelRequest;
    }

    /**
     * Set SetParcelRequest value
     *
     * @return self
     */
    public function setSetParcelRequest(SetParcelRequest $setParcelRequest = null)
    {
        $this->SetParcelRequest = $setParcelRequest;
        return $this;
    }
}
