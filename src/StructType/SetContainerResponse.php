<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetContainerResponse StructType
 */
class SetContainerResponse extends AbstractStructBase
{
    /**
     * The SetContainerResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\SetContainerReturn
     */
    public $SetContainerResult;

    /**
     * Constructor method for SetContainerResponse
     *
     * @uses SetContainerResponse::setSetContainerResult()
     */
    public function __construct(SetContainerReturn $setContainerResult = null)
    {
        $this
            ->setSetContainerResult($setContainerResult)
        ;
    }

    /**
     * Get SetContainerResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\SetContainerReturn|null
     */
    public function getSetContainerResult()
    {
        return $this->SetContainerResult;
    }

    /**
     * Set SetContainerResult value
     *
     * @return self
     */
    public function setSetContainerResult(SetContainerReturn $setContainerResult = null)
    {
        $this->SetContainerResult = $setContainerResult;
        return $this;
    }
}
