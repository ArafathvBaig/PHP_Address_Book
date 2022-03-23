<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Address Book Computation Problem
 */
class Address_Book
{
    public $firstName;
    public $lastName;
    public $address;
    public $city;
    public $State;
    public $zip;
    public $phoneNumber;
    public $email;

    function welcomeMessage()
    {
        echo "Welcome to Address Book Computation Problem\n";
    }

    /**
     * Function to get details from User
     * Non-Parameterized function
     */
    function getDetails()
    {
        $this->firstName = readline('Enter Your First Name: ');
        $this->lastName = readline('Enter Your Last Name: ');
        $this->address = readline('Enter Your Address: ');
        $this->city = readline('Enter Your City: ');
        $this->State = readline('Enter Your State: ');
        $this->zip = readline('Enter Your Zip-Code: ');
        $this->phoneNumber = readline('Enter Your Phone Number: ');
        $this->email = readline('Enter Your Email-Id: ');
    }

    /**
     * Function Print the details of the User
     * Non-Parameterized function
     */
    function showDetails()
    {
        echo "\nFirst Name:: " . $this->firstName;
        echo "\nLast Name:: " . $this->lastName;
        echo "\nAddress:: " . $this->address;
        echo "\nCity:: " . $this->city;
        echo "\nState:: " . $this->State;
        echo "\nZip:: " . $this->zip;
        echo "\nPhone Number:: " . $this->phoneNumber;
        echo "\nEmail:: " . $this->email;
    }
}
$addressBook = new Address_Book();
$addressBook->welcomeMessage();
$addressBook->getDetails();
$addressBook->showDetails();
