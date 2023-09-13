<?php

namespace Scraper\ScraperColisPrive\StructType;

use WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for GetDeliveryCalendarReturn StructType
 */
class GetDeliveryCalendarReturn extends AbstractStructBase
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
     * The DlvrCalendar
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     *
     * @var array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject>
     */
    public $DlvrCalendar;

    /**
     * Constructor method for GetDeliveryCalendarReturn
     *
     * @uses GetDeliveryCalendarReturn::setWSResp()
     * @uses GetDeliveryCalendarReturn::setDlvrCalendar()
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject> $dlvrCalendar
     */
    public function __construct(ResponseObject $wSResp = null, array $dlvrCalendar = [])
    {
        $this
            ->setWSResp($wSResp)
            ->setDlvrCalendar($dlvrCalendar)
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
     * Get DlvrCalendar value
     *
     * @return array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject>|null
     */
    public function getDlvrCalendar()
    {
        return $this->DlvrCalendar;
    }

    /**
     * This method is responsible for validating the values passed to the setDlvrCalendar method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDlvrCalendar method
     *
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDlvrCalendarForArrayConstraintsFromSetDlvrCalendar(array $values = [])
    {
        $message = '';
        $invalidValues = [];

        foreach ($values as $getDeliveryCalendarReturnDlvrCalendarItem) {
            // validation for constraint: itemType
            if (!$getDeliveryCalendarReturnDlvrCalendarItem instanceof \Scraper\ScraperColisPrive\StructType\DeliveryDateObject) {
                $invalidValues[] = \is_object($getDeliveryCalendarReturnDlvrCalendarItem) ? $getDeliveryCalendarReturnDlvrCalendarItem::class : sprintf('%s(%s)', \gettype($getDeliveryCalendarReturnDlvrCalendarItem), var_export($getDeliveryCalendarReturnDlvrCalendarItem, true));
            }
        }

        if (!empty($invalidValues)) {
            $message = sprintf('The DlvrCalendar property can only contain items of type \Scraper\ScraperColisPrive\StructType\DeliveryDateObject, %s given', \is_object($invalidValues) ? $invalidValues::class : (\is_array($invalidValues) ? implode(', ', $invalidValues) : \gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }

    /**
     * Set DlvrCalendar value
     *
     * @param array<\Scraper\ScraperColisPrive\StructType\DeliveryDateObject> $dlvrCalendar
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function setDlvrCalendar(array $dlvrCalendar = [])
    {
        // validation for constraint: array
        if ('' !== ($dlvrCalendarArrayErrorMessage = self::validateDlvrCalendarForArrayConstraintsFromSetDlvrCalendar($dlvrCalendar))) {
            throw new \InvalidArgumentException($dlvrCalendarArrayErrorMessage, __LINE__);
        }
        $this->DlvrCalendar = $dlvrCalendar;
        return $this;
    }

    /**
     * Add item to DlvrCalendar value
     *
     * @throws \InvalidArgumentException
     *
     * @return self
     */
    public function addToDlvrCalendar(DeliveryDateObject $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Scraper\ScraperColisPrive\StructType\DeliveryDateObject) {
            throw new \InvalidArgumentException(sprintf('The DlvrCalendar property can only contain items of type \Scraper\ScraperColisPrive\StructType\DeliveryDateObject, %s given', \is_object($item) ? $item::class : (\is_array($item) ? implode(', ', $item) : \gettype($item))), __LINE__);
        }
        $this->DlvrCalendar[] = $item;
        return $this;
    }
}
