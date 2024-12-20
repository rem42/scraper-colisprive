<?php declare(strict_types=1);

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentRequest StructType
 */
#[\AllowDynamicProperties]
class SetShipmentRequest extends AbstractStructBase
{
    /**
     * The SecurityID
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 1
     * - nillable: true
     */
    protected ?IdentificationObject $SecurityID;

    /**
     * Constructor method for SetShipmentRequest
     *
     * @uses SetShipmentRequest::setSecurityID()
     */
    public function __construct(?IdentificationObject $securityID)
    {
        $this
            ->setSecurityID($securityID)
        ;
    }

    /**
     * Get SecurityID value
     */
    public function getSecurityID(): IdentificationObject
    {
        return $this->SecurityID;
    }

    /**
     * Set SecurityID value
     */
    public function setSecurityID(?IdentificationObject $securityID): self
    {
        $this->SecurityID = $securityID;

        return $this;
    }
}
