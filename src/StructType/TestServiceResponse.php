<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for TestServiceResponse StructType
 */
class TestServiceResponse extends AbstractStructBase
{
    /**
     * The TestServiceResult
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\ResponseObject
     */
    public $TestServiceResult;

    /**
     * Constructor method for TestServiceResponse
     *
     * @uses TestServiceResponse::setTestServiceResult()
     */
    public function __construct(ResponseObject $testServiceResult = null)
    {
        $this
            ->setTestServiceResult($testServiceResult)
        ;
    }

    /**
     * Get TestServiceResult value
     *
     * @return \Scraper\ScraperColisPrive\StructType\ResponseObject|null
     */
    public function getTestServiceResult()
    {
        return $this->TestServiceResult;
    }

    /**
     * Set TestServiceResult value
     *
     * @return self
     */
    public function setTestServiceResult(ResponseObject $testServiceResult = null)
    {
        $this->TestServiceResult = $testServiceResult;
        return $this;
    }
}
