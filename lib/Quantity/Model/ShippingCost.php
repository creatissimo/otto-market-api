<?php
/**
 * ShippingCost
 *
 * PHP version 5
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Receipts API
 *
 * Interface for the partner to get receipts information
 *
 * OpenAPI spec version: 2.0.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 3.0.19
 */
/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Otto\Client\Quantity\Model;

use \ArrayAccess;
use Otto\Client\ObjectSerializer;

/**
 * ShippingCost Class Doc Comment
 *
 * @category Class
 * @description Shipping costs, that are charged or reimbursed as part of this receipt.
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ShippingCost implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ShippingCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'delivery_fee_standard' => '\Otto\Client\Quantity\Model\ShippingFee',
'delivery_fee_freight_surcharge' => '\Otto\Client\Quantity\Model\ShippingFee'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'delivery_fee_standard' => null,
'delivery_fee_freight_surcharge' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'delivery_fee_standard' => 'deliveryFeeStandard',
'delivery_fee_freight_surcharge' => 'deliveryFeeFreightSurcharge'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'delivery_fee_standard' => 'setDeliveryFeeStandard',
'delivery_fee_freight_surcharge' => 'setDeliveryFeeFreightSurcharge'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'delivery_fee_standard' => 'getDeliveryFeeStandard',
'delivery_fee_freight_surcharge' => 'getDeliveryFeeFreightSurcharge'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['delivery_fee_standard'] = isset($data['delivery_fee_standard']) ? $data['delivery_fee_standard'] : null;
        $this->container['delivery_fee_freight_surcharge'] = isset($data['delivery_fee_freight_surcharge']) ? $data['delivery_fee_freight_surcharge'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['delivery_fee_standard'] === null) {
            $invalidProperties[] = "'delivery_fee_standard' can't be null";
        }
        if ($this->container['delivery_fee_freight_surcharge'] === null) {
            $invalidProperties[] = "'delivery_fee_freight_surcharge' can't be null";
        }
        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets delivery_fee_standard
     *
     * @return \Otto\Client\Quantity\Model\ShippingFee
     */
    public function getDeliveryFeeStandard()
    {
        return $this->container['delivery_fee_standard'];
    }

    /**
     * Sets delivery_fee_standard
     *
     * @param \Otto\Client\Quantity\Model\ShippingFee $delivery_fee_standard delivery_fee_standard
     *
     * @return $this
     */
    public function setDeliveryFeeStandard($delivery_fee_standard)
    {
        $this->container['delivery_fee_standard'] = $delivery_fee_standard;

        return $this;
    }

    /**
     * Gets delivery_fee_freight_surcharge
     *
     * @return \Otto\Client\Quantity\Model\ShippingFee
     */
    public function getDeliveryFeeFreightSurcharge()
    {
        return $this->container['delivery_fee_freight_surcharge'];
    }

    /**
     * Sets delivery_fee_freight_surcharge
     *
     * @param \Otto\Client\Quantity\Model\ShippingFee $delivery_fee_freight_surcharge delivery_fee_freight_surcharge
     *
     * @return $this
     */
    public function setDeliveryFeeFreightSurcharge($delivery_fee_freight_surcharge)
    {
        $this->container['delivery_fee_freight_surcharge'] = $delivery_fee_freight_surcharge;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}