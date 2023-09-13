<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetPickupPointsListReturn StructType
 */
class GetPickupPointsListReturn extends AbstractStructBase
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
     * The PcksList
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject>
     */
    public $PcksList;

    /**
     * Constructor method for GetPickupPointsListReturn
     *
     * @uses GetPickupPointsListReturn::setWSResp()
     * @uses GetPickupPointsListReturn::setPcksList()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject> $pcksList
     */
    public function __construct(ResponseObject $wSResp = null, array $pcksList = [])
    {
        $this
            ->setWSResp($wSResp)
            ->setPcksList($pcksList)
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
     * Get PcksList value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject>|null
     */
    public function getPcksList()
    {
        return $this->PcksList;
    }

    /**
     * This method is responsible for validating the values passed to the setPcksList method
     * This method is willingly generated in order to preserve the one-line inline validation within the setPcksList method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validatePcksListForArrayConstraintsFromSetPcksList(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $getPickupPointsListReturnPcksListItem) {
            // validation for constraint: itemType
            if (!$getPickupPointsListReturnPcksListItem instanceof \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject) {
                $invalidValues[] = \is_object($getPickupPointsListReturnPcksListItem) ? $getPickupPointsListReturnPcksListItem::class : sprintf('%s(%s)', \gettype($getPickupPointsListReturnPcksListItem), var_export($getPickupPointsListReturnPcksListItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The PcksList property can only contain items of type \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set PcksList value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject> $pcksList
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setPcksList(array $pcksList = [])
    {
        // validation for constraint: array
        if ('' !== ($pcksListArrayErrorMessage = self::validatePcksListForArrayConstraintsFromSetPcksList($pcksList))) {
            throw new \InvalidArgumentException($pcksListArrayErrorMessage, __LINE__);
        }
        $this->PcksList = $pcksList;
        return $this;
    }

    /**
     * Add item to PcksList value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToPcksList(PickupPointDeliveryObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject) {
            throw new \InvalidArgumentException(sprintf('The PcksList property can only contain items of type \Scraper\ScraperColisPrive\StructType\PickupPointDeliveryObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->PcksList[] = $item;
        return $this;
    }
}
