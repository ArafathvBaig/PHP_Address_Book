<?php
include 'Contact.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Address Book Computation Problem
 */
class Address_Book
{
    public $contactArray = array();
    public $person;

    function welcomeMessage()
    {
        echo "Welcome to Address Book Computation Problem\n";
    }

    /**
     * Function to get details from User
     * Non-Parameterized function
     */
    function addNewContact()
    {
        $firstName = readline('Enter Your First Name: ');
        $lastName = readline('Enter Your Last Name: ');
        $address = readline('Enter Your Address: ');
        $city = readline('Enter Your City: ');
        $state = readline('Enter Your State: ');
        $zipCode = readline('Enter Your Zip-Code: ');
        $phoneNumber = readline('Enter Your Phone Number: ');
        $emailId = readline('Enter Your Email-Id: ');

        $this->person = new Contact($firstName, $lastName, $address, $city, $state, $zipCode, $phoneNumber, $emailId);
        array_push($this->contactArray, $this->person);
    }

    /**
     * Function Print the details of the User
     * Non-Parameterized function
     */
    function showContactDetails()
    {
        for ($i = 0; $i < count($this->contactArray); $i++) {
            echo"\nFirst Name:: " . $this->person->getFirstName()
                . "\nLast Name:: " . $this->person->getLastName()
                . "\nAddress:: " . $this->person->getAddress()
                . "\nCity:: " . $this->person->getCity()
                . "\nState:: " . $this->person->getState()
                . "\nZipCode:: " . $this->person->getZipCode()
                . "\nPhone Number : " . $this->person->getPhoneNumber()
                . "\nEmail Id:: " . $this->person->getEmailId();
        }
    }
}
$addressBook = new Address_Book();
$addressBook->welcomeMessage();
$addressBook->addNewContact();
$addressBook->showContactDetails();
