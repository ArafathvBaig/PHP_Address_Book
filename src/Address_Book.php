<?php
include 'Contact.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Address Book Computation Problem
 */
class Address_Book
{
    //public $contactArray = array();
    public $person;

    /**
     * Function to get details from User
     * Passing First Name as parameter
     * returns the person object
     */
    function addNewContact($firstName)
    {
        //$firstName = readline('Enter Your First Name: ');
        $lastName = readline('Enter Your Last Name: ');
        $address = readline('Enter Your Address: ');
        $city = readline('Enter Your City: ');
        $state = readline('Enter Your State: ');
        $zipCode = readline('Enter Your Zip-Code: ');
        $phoneNumber = readline('Enter Your Phone Number: ');
        $emailId = readline('Enter Your Email-Id: ');

        $this->person = new Contact($firstName, $lastName, $address, $city, $state, $zipCode, $phoneNumber, $emailId);
        //array_push($this->contactArray, $this->person);
        return $this->person;
    }

    /**
     * Function to edit a contact
     * Non-Parameterized function
     * returns the person object
     */
    function editContact()
    {
        $firstName = readline('Edit First Name: ');
        $lastName = readline('Edit Last Name: ');
        $address = readline('Edit Address: ');
        $city = readline('Edit City: ');
        $state = readline('Edit State: ');
        $zipCode = readline('Edit ZipCode: ');
        $phoneNumber = readline('Edit Mobile Number: ');
        $emailId = readline('Edit EmailId: ');

        $this->person->setFirstName($firstName);
        $this->person->setLastName($lastName);
        $this->person->setAddress($address);
        $this->person->setCity($city);
        $this->person->setState($state);
        $this->person->setZipCode($zipCode);
        $this->person->setPhoneNumber($phoneNumber);
        $this->person->setEmailId($emailId);

        return $this->person;
    }

    /**
     * Function to delete contact by First Name
     * Passing the AddressBook as parameter
     * Returns the AddressBook
     */
    public function deleteContact($addressBook)
    {
        $deleteName = readline('Enter the First Name of person to delete: ');
        foreach ($addressBook as $key => $values) {
            for ($i = 0; $i < count($values); $i++) {
                $name = $values[$i];
                if ($deleteName == $name->getFirstName()) {
                    unset($values[$i]);
                }
            }
        }
        return $addressBook;
    }
}
