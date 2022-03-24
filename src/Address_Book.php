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
     * Function to edit a contact by first name
     * Non-Parameterized function
     */
    function editContact()
    {
        $editName = readline('Enter First Name of Person to Edit: ');
        for ($i = 0; $i < count($this->contactArray); $i++) {
            $name = $this->contactArray[$i];
            echo "First Name: " . $name->getFirstName() . "\n";
            if ($editName == $name->getFirstName()) {
                $firstName = readline('Edit First Name: ');
                $lastName = readline('Edit Last Name: ');
                $address = readline('Edit Address: ');
                $city = readline('Edit City: ');
                $state = readline('Edit State: ');
                $zipCode = readline('Edit ZipCode: ');
                $phoneNumber = readline('Edit Mobile Number: ');
                $emailId = readline('Edit EmailId: ');

                $name->setFirstName($firstName);
                $name->setLastName($lastName);
                $name->setAddress($address);
                $name->setCity($city);
                $name->setState($state);
                $name->setZipCode($zipCode);
                $name->setPhoneNumber($phoneNumber);
                $name->setEmailId($emailId);

                $this->contactArray[$i] = $name;
                break;
            } else {
                echo "The name does not exist.";
            }
        }
    }

    /**
     * Function to delete contact using first name
     * Non-Parameterized function
     */
    public function deleteContact()
    {
        echo "\n";
        $deleteName = readline('Enter the First Name of person to delete: ');
        for ($i = 0; $i < count($this->contactArray); $i++) {
            $name = $this->contactArray[$i];
            if ($deleteName == $name->getFirstName()) {
                unset($this->contactArray[$i]);
            }
        }
    }

    /**
     * Function Print the details of the User
     * Non-Parameterized function
     */
    function showContactDetails()
    {
        foreach ($this->contactArray as $contacts) {
            echo $contacts . "\n";
        }
    }
}
$addressBook = new Address_Book();
$addressBook->welcomeMessage();
while (true) {
    echo "\n1. Add New Contact \n2. Edit Person with First Name \n3. Delete Person With First Name \n4. Show Contacts \n5. Exit\n";
    $option = readline('Enter Your Option: ');
    switch ($option) {
        case 1:
            $addressBook->addNewContact();
            break;
        case 2:
            $addressBook->editContact();
            break;
        case 3:
            $addressBook->deleteContact();
            break;
        case 4:
            $addressBook->showContactDetails();
            break;
        case 5:
            exit("Exit");
            break;
        default:
            echo "\nNo such Option.";
            break;
    }
}
