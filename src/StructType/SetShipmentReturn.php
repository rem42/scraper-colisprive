<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for SetShipmentReturn StructType
 */
class SetShipmentReturn extends AbstractStructBase
{
    /**
     * The WSResp
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var \Scraper\ScraperColisPrive\StructType\ResponseObject
     */
    public $WSResp;
    /**
     * The ShipCode
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $ShipCode;
    /**
     * The PclList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\LightParcelObject>
     */
    public $PclList;
    /**
     * The MnftUrl
     * Meta information extracted from the WSDL
     * - maxOccurs: 1
     * - minOccurs: 0
     *
     * @var string
     */
    public $MnftUrl;

    /**
     * Constructor method for SetShipmentReturn
     *
     * @uses SetShipmentReturn::setWSResp()
     * @uses SetShipmentReturn::setShipCode()
     * @uses SetShipmentReturn::setPclList()
     * @uses SetShipmentReturn::setMnftUrl()
     *
     * @param string                                                         $shipCode
     * @param array<\Scraper\ScraperColisPrive\StructType\LightParcelObject> $pclList
     * @param string                                                         $mnftUrl
     */
    public function __construct(ResponseObject $wSResp = null, $shipCode = null, array $pclList = [], $mnftUrl = null)
    {
        $this
            ->setWSResp($wSResp)
            ->setShipCode($shipCode)
            ->setPclList($pclList)
            ->setMnftUrl($mnftUrl)
        ;
    }

    /**
     * Get WSResp value
     *
     * @return \Scraper\ScraperColisPrive\StructType\ResponseObject|null
     */
    public function getWSResp()
    {
        return $this->WSResp;
    }

    /**
     * Set WSResp value
     *
     * @return self
     */
    public function setWSResp(ResponseObject $wSResp = null)
    {
        $this->WSResp = $wSResp;
        return $this;
    }

    /**
     * Get ShipCode value
     *
     * @return string|null
     */
    public function getShipCode()
    {
        return $this->ShipCode;
    }

    /**
     * Set ShipCode value
     *
     * @param string $shipCode
     *
     * @return self
     */
    public function setShipCode($shipCode = null)
    {
        // validation for constraint: string
        if (null !== $shipCode && !\is_string($shipCode)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($shipCode, true), \gettype($shipCode)), __LINE__);
        }
        $this->ShipCode = $shipCode;
        return $this;
    }

    /**
     * Get PclList value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\LightParcelObject>|null
     */
    public function getPclList()
    {
        return $this->PclList;
    }

    /**
     * This method is responsible for validating the values passed to the setPclList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPclList method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePclListForArrayConstraintsFromSetPclList(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $setShipmentReturnPclListItem) {
            // validation for constraint: itemType
            if (!$setShipmentReturnPclListItem instanceof \Scraper\ScraperColisPrive\StructType\LightParcelObject) {
                $invalidValues[] = \is_object($setShipmentReturnPclListItem) ? $setShipmentReturnPclListItem::class : sprintf('%s(%s)', \gettype($setShipmentReturnPclListItem), var_export($setShipmentReturnPclListItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PclList property can only contain items of type \Scraper\ScraperColisPrive\StructType\LightParcelObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set PclList value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\LightParcelObject> $pclList
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setPclList(array $pclList = [])
    {
        // validation for constraint: array
        if ('' !== ($pclListArrayErrorMessage = self::validatePclListForArrayConstraintsFromSetPclList($pclList))) {
            throw new \InvalidArgumentException($pclListArrayErrorMessage, __LINE__);
        }
        $this->PclList = $pclList;
        return $this;
    }

    /**
     * Add item to PclList value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToPclList(LightParcelObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperColisPrive\StructType\LightParcelObject) {
            throw new \InvalidArgumentException(sprintf('The PclList property can only contain items of type \Scraper\ScraperColisPrive\StructType\LightParcelObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PclList[] = $item;
        return $this;
    }

    /**
     * Get MnftUrl value
     *
     * @return string|null
     */
    public function getMnftUrl()
    {
        return $this->MnftUrl;
    }

    /**
     * Set MnftUrl value
     *
     * @param string $mnftUrl
     *
     * @return self
     */
    public function setMnftUrl($mnftUrl = null)
    {
        // validation for constraint: string
        if (null !== $mnftUrl && !\is_string($mnftUrl)) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a string, %s given', var_export($mnftUrl, true), \gettype($mnftUrl)), __LINE__);
        }
        $this->MnftUrl = $mnftUrl;
        return $this;
    }
}
