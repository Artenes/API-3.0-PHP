<?php

namespace Cielo\API30\Ecommerce;

use stdClass;

/**
 * A customer address.
 *
 * @package Cielo\API30\Ecommerce
 */
class Address implements CieloSerializable
{

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $complement;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * Converts the object to array.
     *
     * @return array
     */
    public function jsonSerialize()
    {
        return get_object_vars($this);
    }

    /**
     * Populate the object with the given data.
     *
     * @param stdClass $data
     */
    public function populate(stdClass $data)
    {
        $this->street = isset($data->Street) ? $data->Street : null;
        $this->number = isset($data->Number) ? $data->Number : null;
        $this->complement = isset($data->Complement) ? $data->Complement : null;
        $this->zipCode = isset($data->ZipCode) ? $data->ZipCode : null;
        $this->city = isset($data->City) ? $data->City : null;
        $this->state = isset($data->State) ? $data->State : null;
        $this->country = isset($data->Country) ? $data->Country : null;
    }

    /**
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param $street
     * @return Address
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @param $number
     * @return Address
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * @return string
     */
    public function getComplement()
    {
        return $this->complement;
    }

    /**
     * @param $complement
     * @return Address
     */
    public function setComplement($complement)
    {
        $this->complement = $complement;
        return $this;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param $zipCode
     * @return Address
     */
    public function setZipCode($zipCode)
    {
        $this->zipCode = $zipCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param $city
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param $state
     * @return Address
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param $country
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }

}