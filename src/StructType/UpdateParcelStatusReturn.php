<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for UpdateParcelStatusReturn StructType
 */
#[\AllowDynamicProperties]
class UpdateParcelStatusReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     */
    protected ?ResponseObject $WSResp = null;

    /**
     * Constructor method for UpdateParcelStatusReturn
     *
     * @uses UpdateParcelStatusReturn::setWSResp()
     */
    public function __construct(?ResponseObject $wSResp = null)
    {
        $this
            ->setWSResp($wSResp)
        ;
    }

    /**
     * Get WSResp value
     */
    public function getWSResp(): ?ResponseObject
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     */
    public function setWSResp(?ResponseObject $wSResp = null): self
    {
        $this->WSResp = $wSResp;

        return $this;
    }
}
