<?php
/**
 * EventViewModel
 *
 * PHP version 5
 *
 * @category Class
 * @package  ChrisHemmings\Electio
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Electio API
 *
 * A minimal Electio client
 *
 * OpenAPI spec version: 1.0.0
 * Contact: chris@hemmin.gs
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ChrisHemmings\Electio\Client\Model;

use \ArrayAccess;

/**
 * EventViewModel Class Doc Comment
 *
 * @category    Class
 * @package     ChrisHemmings\Electio
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class EventViewModel implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'EventViewModel';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'time_stamp' => '\DateTime',
        'code' => 'string',
        'description' => 'string',
        'signed_by' => 'string',
        'location' => 'string',
        'carrier_service_name' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'time_stamp' => 'TimeStamp',
        'code' => 'Code',
        'description' => 'Description',
        'signed_by' => 'SignedBy',
        'location' => 'Location',
        'carrier_service_name' => 'CarrierServiceName'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'time_stamp' => 'setTimeStamp',
        'code' => 'setCode',
        'description' => 'setDescription',
        'signed_by' => 'setSignedBy',
        'location' => 'setLocation',
        'carrier_service_name' => 'setCarrierServiceName'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'time_stamp' => 'getTimeStamp',
        'code' => 'getCode',
        'description' => 'getDescription',
        'signed_by' => 'getSignedBy',
        'location' => 'getLocation',
        'carrier_service_name' => 'getCarrierServiceName'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['time_stamp'] = isset($data['time_stamp']) ? $data['time_stamp'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['signed_by'] = isset($data['signed_by']) ? $data['signed_by'] : null;
        $this->container['location'] = isset($data['location']) ? $data['location'] : null;
        $this->container['carrier_service_name'] = isset($data['carrier_service_name']) ? $data['carrier_service_name'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets time_stamp
     * @return \DateTime
     */
    public function getTimeStamp()
    {
        return $this->container['time_stamp'];
    }

    /**
     * Sets time_stamp
     * @param \DateTime $time_stamp
     * @return $this
     */
    public function setTimeStamp($time_stamp)
    {
        $this->container['time_stamp'] = $time_stamp;

        return $this;
    }

    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code
     * @return $this
     */
    public function setCode($code)
    {
        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets description
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     * @param string $description
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets signed_by
     * @return string
     */
    public function getSignedBy()
    {
        return $this->container['signed_by'];
    }

    /**
     * Sets signed_by
     * @param string $signed_by
     * @return $this
     */
    public function setSignedBy($signed_by)
    {
        $this->container['signed_by'] = $signed_by;

        return $this;
    }

    /**
     * Gets location
     * @return string
     */
    public function getLocation()
    {
        return $this->container['location'];
    }

    /**
     * Sets location
     * @param string $location
     * @return $this
     */
    public function setLocation($location)
    {
        $this->container['location'] = $location;

        return $this;
    }

    /**
     * Gets carrier_service_name
     * @return string
     */
    public function getCarrierServiceName()
    {
        return $this->container['carrier_service_name'];
    }

    /**
     * Sets carrier_service_name
     * @param string $carrier_service_name
     * @return $this
     */
    public function setCarrierServiceName($carrier_service_name)
    {
        $this->container['carrier_service_name'] = $carrier_service_name;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\ChrisHemmings\Electio\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\ChrisHemmings\Electio\ObjectSerializer::sanitizeForSerialization($this));
    }
}


