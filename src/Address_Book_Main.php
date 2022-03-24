<?php
include 'Multiple_Address_Books.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for the functions to implement
 */
class Address_Book_Main
{
    function multipleAddressBooks()
    {
        $multipleAddressBooks = new Multiple_Address_Books();
        $multipleAddressBooks->welcomeMessage();
        while (true) {
            echo "\n1. Add New AddressBook \n2. Add New Contact to AddressBook"
                . "\n3. Edit Contact in a AddressBook \n4. Delete AddressBook"
                . "\n5. Delete Contact from AddressBook \n6. Show Contacts from AddressBook"
                . "\n0. Exit\n";
            $option = readline('Enter Your Option: ');
            switch ($option) {
                case 1:
                    $multipleAddressBooks->addNewAddressBook();
                    break;
                case 2:
                    $multipleAddressBooks->addNewContact();
                    break;
                case 3:
                    $multipleAddressBooks->editContactInAddressBook();
                    break;
                case 4:
                    $multipleAddressBooks->deleteAddressBook();
                case 5:
                    $multipleAddressBooks->deleteContactFromAddressBook();
                    break;
                case 6:
                    $multipleAddressBooks->showContactsFromAddressBook();
                    break;
                case 0:
                    exit("Exit");
                    break;
                default:
                    echo "\nNo such Option.";
                    break;
            }
        }
    }
}
$addressBookMain = new Address_Book_Main();
$addressBookMain->multipleAddressBooks();
