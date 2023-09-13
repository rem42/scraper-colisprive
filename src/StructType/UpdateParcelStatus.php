<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatus StructType
 */
class UpdateParcelStatus extends AbstractStructBase
{
    /**
     * The UpdateParcelStatusRequest
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     *
     * @var \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusRequest
     */
    public $UpdateParcelStatusRequest;

    /**
     * Constructor method for UpdateParcelStatus
     *
     * @uses UpdateParcelStatus::setUpdateParcelStatusRequest()
     */
    public function __construct(UpdateParcelStatusRequest $updateParcelStatusRequest = null)
    {
        $this
            ->setUpdateParcelStatusRequest($updateParcelStatusRequest)
        ;
    }

    /**
     * Get UpdateParcelStatusRequest value
     *
     * @return \Scraper\ScraperColisPrive\StructType\UpdateParcelStatusRequest
     */
    public function getUpdateParcelStatusRequest()
    {
        return $this->UpdateParcelStatusRequest;
    }

    /**
     * Set UpdateParcelStatusRequest value
     *
     * @return self
     */
    public function setUpdateParcelStatusRequest(UpdateParcelStatusRequest $updateParcelStatusRequest = null)
    {
        $this->UpdateParcelStatusRequest = $updateParcelStatusRequest;
        return $this;
    }
}
