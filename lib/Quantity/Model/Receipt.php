<?php
/**
 * Receipt
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

use ArrayAccess;
use Otto\Client\ObjectSerializer;

/**
 * Receipt Class Doc Comment
 *
 * @category Class
 * @package  Otto\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Receipt implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Receipt';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
'original_receipt_number' => 'string',
'original_creation_date' => '\DateTime',
'receipt_number' => 'string',
'sales_order_id' => 'string',
'order_number' => 'string',
'url' => 'string',
'creation_date' => '\DateTime',
'order_date' => '\DateTime',
'shipment_date' => '\DateTime',
'payment_method' => 'string',
'partner' => '\Otto\Client\Quantity\Model\Partner',
'customer' => '\Otto\Client\Quantity\Model\Customer',
'delivery_address' => '\Otto\Client\Quantity\Model\DeliveryAddress',
'line_items' => '\Otto\Client\Quantity\Model\LineItem[]',
'shipping_cost' => '\Otto\Client\Quantity\Model\ShippingCost',
'total' => '\Otto\Client\Quantity\Model\Total'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
'original_receipt_number' => null,
'original_creation_date' => 'date-time',
'receipt_number' => null,
'sales_order_id' => 'uuid',
'order_number' => null,
'url' => null,
'creation_date' => 'date-time',
'order_date' => 'date-time',
'shipment_date' => 'date-time',
'payment_method' => null,
'partner' => null,
'customer' => null,
'delivery_address' => null,
'line_items' => null,
'shipping_cost' => null,
'total' => null    ];

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
        'type' => 'type',
'original_receipt_number' => 'originalReceiptNumber',
'original_creation_date' => 'originalCreationDate',
'receipt_number' => 'receiptNumber',
'sales_order_id' => 'salesOrderId',
'order_number' => 'orderNumber',
'url' => 'url',
'creation_date' => 'creationDate',
'order_date' => 'orderDate',
'shipment_date' => 'shipmentDate',
'payment_method' => 'paymentMethod',
'partner' => 'partner',
'customer' => 'customer',
'delivery_address' => 'deliveryAddress',
'line_items' => 'lineItems',
'shipping_cost' => 'shippingCost',
'total' => 'total'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
'original_receipt_number' => 'setOriginalReceiptNumber',
'original_creation_date' => 'setOriginalCreationDate',
'receipt_number' => 'setReceiptNumber',
'sales_order_id' => 'setSalesOrderId',
'order_number' => 'setOrderNumber',
'url' => 'setUrl',
'creation_date' => 'setCreationDate',
'order_date' => 'setOrderDate',
'shipment_date' => 'setShipmentDate',
'payment_method' => 'setPaymentMethod',
'partner' => 'setPartner',
'customer' => 'setCustomer',
'delivery_address' => 'setDeliveryAddress',
'line_items' => 'setLineItems',
'shipping_cost' => 'setShippingCost',
'total' => 'setTotal'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
'original_receipt_number' => 'getOriginalReceiptNumber',
'original_creation_date' => 'getOriginalCreationDate',
'receipt_number' => 'getReceiptNumber',
'sales_order_id' => 'getSalesOrderId',
'order_number' => 'getOrderNumber',
'url' => 'getUrl',
'creation_date' => 'getCreationDate',
'order_date' => 'getOrderDate',
'shipment_date' => 'getShipmentDate',
'payment_method' => 'getPaymentMethod',
'partner' => 'getPartner',
'customer' => 'getCustomer',
'delivery_address' => 'getDeliveryAddress',
'line_items' => 'getLineItems',
'shipping_cost' => 'getShippingCost',
'total' => 'getTotal'    ];

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

    const TYPE_PURCHASE = 'PURCHASE';
const TYPE_REFUND = 'REFUND';
const TYPE_PARTIAL_REFUND = 'PARTIAL_REFUND';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_PURCHASE,
self::TYPE_REFUND,
self::TYPE_PARTIAL_REFUND,        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['original_receipt_number'] = isset($data['original_receipt_number']) ? $data['original_receipt_number'] : null;
        $this->container['original_creation_date'] = isset($data['original_creation_date']) ? $data['original_creation_date'] : null;
        $this->container['receipt_number'] = isset($data['receipt_number']) ? $data['receipt_number'] : null;
        $this->container['sales_order_id'] = isset($data['sales_order_id']) ? $data['sales_order_id'] : null;
        $this->container['order_number'] = isset($data['order_number']) ? $data['order_number'] : null;
        $this->container['url'] = isset($data['url']) ? $data['url'] : null;
        $this->container['creation_date'] = isset($data['creation_date']) ? $data['creation_date'] : null;
        $this->container['order_date'] = isset($data['order_date']) ? $data['order_date'] : null;
        $this->container['shipment_date'] = isset($data['shipment_date']) ? $data['shipment_date'] : null;
        $this->container['payment_method'] = isset($data['payment_method']) ? $data['payment_method'] : null;
        $this->container['partner'] = isset($data['partner']) ? $data['partner'] : null;
        $this->container['customer'] = isset($data['customer']) ? $data['customer'] : null;
        $this->container['delivery_address'] = isset($data['delivery_address']) ? $data['delivery_address'] : null;
        $this->container['line_items'] = isset($data['line_items']) ? $data['line_items'] : null;
        $this->container['shipping_cost'] = isset($data['shipping_cost']) ? $data['shipping_cost'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['receipt_number'] === null) {
            $invalidProperties[] = "'receipt_number' can't be null";
        }
        if ($this->container['sales_order_id'] === null) {
            $invalidProperties[] = "'sales_order_id' can't be null";
        }
        if ($this->container['order_number'] === null) {
            $invalidProperties[] = "'order_number' can't be null";
        }
        if ($this->container['creation_date'] === null) {
            $invalidProperties[] = "'creation_date' can't be null";
        }
        if ($this->container['order_date'] === null) {
            $invalidProperties[] = "'order_date' can't be null";
        }
        if ($this->container['payment_method'] === null) {
            $invalidProperties[] = "'payment_method' can't be null";
        }
        if ($this->container['partner'] === null) {
            $invalidProperties[] = "'partner' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['total'] === null) {
            $invalidProperties[] = "'total' can't be null";
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
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type Special type of receipt. Needed to make a distinction between different type of receipts
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets original_receipt_number
     *
     * @return string
     */
    public function getOriginalReceiptNumber()
    {
        return $this->container['original_receipt_number'];
    }

    /**
     * Sets original_receipt_number
     *
     * @param string $original_receipt_number Unique identifier of the corresponding purchase receipt with which the reimbursed position item was billed. Only filled in case of refund or partial refund receipts.In case of 'refund receipt for shipping costs only' the field remains empty even if it is a refund receipt.Printed on the purchase receipt and used to identified the corresponding purchase receipt.
     *
     * @return $this
     */
    public function setOriginalReceiptNumber($original_receipt_number)
    {
        $this->container['original_receipt_number'] = $original_receipt_number;

        return $this;
    }

    /**
     * Gets original_creation_date
     *
     * @return \DateTime
     */
    public function getOriginalCreationDate()
    {
        return $this->container['original_creation_date'];
    }

    /**
     * Sets original_creation_date
     *
     * @param \DateTime $original_creation_date Creation date of the corresponding purchase receipt. This is not available for purchase receipt.
     *
     * @return $this
     */
    public function setOriginalCreationDate($original_creation_date)
    {
        $this->container['original_creation_date'] = $original_creation_date;

        return $this;
    }

    /**
     * Gets receipt_number
     *
     * @return string
     */
    public function getReceiptNumber()
    {
        return $this->container['receipt_number'];
    }

    /**
     * Sets receipt_number
     *
     * @param string $receipt_number Unique identifier of a receipt. Printed on the receipt and used to identified the receipt in case of contact to user and partner.
     *
     * @return $this
     */
    public function setReceiptNumber($receipt_number)
    {
        $this->container['receipt_number'] = $receipt_number;

        return $this;
    }

    /**
     * Gets sales_order_id
     *
     * @return string
     */
    public function getSalesOrderId()
    {
        return $this->container['sales_order_id'];
    }

    /**
     * Sets sales_order_id
     *
     * @param string $sales_order_id Reference to the sales order with that the order was placed. Taken from corresponding sales order.
     *
     * @return $this
     */
    public function setSalesOrderId($sales_order_id)
    {
        $this->container['sales_order_id'] = $sales_order_id;

        return $this;
    }

    /**
     * Gets order_number
     *
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->container['order_number'];
    }

    /**
     * Sets order_number
     *
     * @param string $order_number The human-readable sales order number taken from corresponding sales order. Printed on the receipt.
     *
     * @return $this
     */
    public function setOrderNumber($order_number)
    {
        $this->container['order_number'] = $order_number;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url API call to get corresponding PDF receipt. Not available for old refund receipts and partial refund receipts.
     *
     * @return $this
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets creation_date
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creation_date'];
    }

    /**
     * Sets creation_date
     *
     * @param \DateTime $creation_date Date and time when receipt is created by system.
     *
     * @return $this
     */
    public function setCreationDate($creation_date)
    {
        $this->container['creation_date'] = $creation_date;

        return $this;
    }

    /**
     * Gets order_date
     *
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->container['order_date'];
    }

    /**
     * Sets order_date
     *
     * @param \DateTime $order_date Date and time when the corresponding order was placed.
     *
     * @return $this
     */
    public function setOrderDate($order_date)
    {
        $this->container['order_date'] = $order_date;

        return $this;
    }

    /**
     * Gets shipment_date
     *
     * @return \DateTime
     */
    public function getShipmentDate()
    {
        return $this->container['shipment_date'];
    }

    /**
     * Sets shipment_date
     *
     * @param \DateTime $shipment_date Date and time when the position items handed over to the carrier for delivery to the customer. Only available for purchase receipts.
     *
     * @return $this
     */
    public function setShipmentDate($shipment_date)
    {
        $this->container['shipment_date'] = $shipment_date;

        return $this;
    }

    /**
     * Gets payment_method
     *
     * @return string
     */
    public function getPaymentMethod()
    {
        return $this->container['payment_method'];
    }

    /**
     * Sets payment_method
     *
     * @param string $payment_method Payment method used by the customer to pay for this order.
     *
     * @return $this
     */
    public function setPaymentMethod($payment_method)
    {
        $this->container['payment_method'] = $payment_method;

        return $this;
    }

    /**
     * Gets partner
     *
     * @return \Otto\Client\Quantity\Model\Partner
     */
    public function getPartner()
    {
        return $this->container['partner'];
    }

    /**
     * Sets partner
     *
     * @param \Otto\Client\Quantity\Model\Partner $partner partner
     *
     * @return $this
     */
    public function setPartner($partner)
    {
        $this->container['partner'] = $partner;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \Otto\Client\Quantity\Model\Customer
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \Otto\Client\Quantity\Model\Customer $customer customer
     *
     * @return $this
     */
    public function setCustomer($customer)
    {
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets delivery_address
     *
     * @return \Otto\Client\Quantity\Model\DeliveryAddress
     */
    public function getDeliveryAddress()
    {
        return $this->container['delivery_address'];
    }

    /**
     * Sets delivery_address
     *
     * @param \Otto\Client\Quantity\Model\DeliveryAddress $delivery_address delivery_address
     *
     * @return $this
     */
    public function setDeliveryAddress($delivery_address)
    {
        $this->container['delivery_address'] = $delivery_address;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \Otto\Client\Quantity\Model\LineItem[]
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \Otto\Client\Quantity\Model\LineItem[] $line_items List of specific position item ids of the order billed or reimbursed.In case of 'refund receipt for shipping costs only' the list can be empty.
     *
     * @return $this
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets shipping_cost
     *
     * @return \Otto\Client\Quantity\Model\ShippingCost
     */
    public function getShippingCost()
    {
        return $this->container['shipping_cost'];
    }

    /**
     * Sets shipping_cost
     *
     * @param \Otto\Client\Quantity\Model\ShippingCost $shipping_cost shipping_cost
     *
     * @return $this
     */
    public function setShippingCost($shipping_cost)
    {
        $this->container['shipping_cost'] = $shipping_cost;

        return $this;
    }

    /**
     * Gets total
     *
     * @return \Otto\Client\Quantity\Model\Total
     */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
     * Sets total
     *
     * @param \Otto\Client\Quantity\Model\Total $total total
     *
     * @return $this
     */
    public function setTotal($total)
    {
        $this->container['total'] = $total;

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
