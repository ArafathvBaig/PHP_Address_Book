<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for getting contact details
 */
class Contact
{
    protected $firstName;
    protected $lastName;
    protected $address;
    protected $city;
    protected $State;
    protected $zipCode;
    protected $phoneNumber;
    protected $emailId;

    public function __construct($firstName, $lastName, $address, $city, $state, $zipCode, $phoneNumber, $emailId,)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->city = $city;
        $this->state = $state;
        $this->zipCode = $zipCode;
        $this->phoneNumber = $phoneNumber;
        $this->emailId = $emailId;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getState()
    {
        return $this->state;
    }

    public function getZipCode()
    {
        return $this->zipCode;
    }

    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    public function getEmailId()
    {
        return $this->emailId;
    }

    public function __toString()
    {
        return "\nFirst Name:: " . $this->firstName
            . "\nLast Name:: " . $this->lastName
            . "\nAddress:: " . $this->address
            . "\nCity:: " . $this->city
            . "\nState:: " . $this->state
            . "\nZipCode:: " . $this->zipCode
            . "\nPhone Number : " . $this->phoneNumber
            . "\nEmail Id:: " . $this->emailId;
    }
}
