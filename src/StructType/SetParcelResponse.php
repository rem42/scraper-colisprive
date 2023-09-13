<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetParcelResponse StructType
 */
class SetParcelResponse extends AbstractStructBase
{
    /**
     * The SetParcelResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetParcelReturn
     */
    public $SetParcelResult;

    /**
     * Constructor method for SetParcelResponse
     *
     * @uses SetParcelResponse::setSetParcelResult()
     */
    public function __construct(SetParcelReturn $setParcelResult = null)
    {
        $this
            ->setSetParcelResult($setParcelResult)
        ;
    }

    /**
     * Get SetParcelResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetParcelReturn|null
     */
    public function getSetParcelResult()
    {
        return $this->SetParcelResult;
    }

    /**
     * Set SetParcelResult value
     *
     * @return self
     */
    public function setSetParcelResult(SetParcelReturn $setParcelResult = null)
    {
        $this->SetParcelResult = $setParcelResult;
        return $this;
    }
}
