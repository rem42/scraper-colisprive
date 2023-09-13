<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatusResponse StructType
 */
class UpdateParcelStatusResponse extends AbstractStructBase
{
    /**
     * The UpdateParcelStatusResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusReturn
     */
    public $UpdateParcelStatusResult;

    /**
     * Constructor method for UpdateParcelStatusResponse
     *
     * @uses UpdateParcelStatusResponse::setUpdateParcelStatusResult()
     */
    public function __construct(UpdateParcelStatusReturn $updateParcelStatusResult = null)
    {
        $this
            ->setUpdateParcelStatusResult($updateParcelStatusResult)
        ;
    }

    /**
     * Get UpdateParcelStatusResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusReturn|null
     */
    public function getUpdateParcelStatusResult()
    {
        return $this->UpdateParcelStatusResult;
    }

    /**
     * Set UpdateParcelStatusResult value
     *
     * @return self
     */
    public function setUpdateParcelStatusResult(UpdateParcelStatusReturn $updateParcelStatusResult = null)
    {
        $this->UpdateParcelStatusResult = $updateParcelStatusResult;
        return $this;
    }
}
