<?php
include 'Address_Book.php';

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class for Multiple Address Books
 */
class Multiple_Address_Books
{
	public $addressBookArray;
	public $addressBook;

	public function __construct()
	{
		$this->addressBook = new Address_Book();
		$this->addressBookArray = [];
	}

	function welcomeMessage()
	{
		echo "Welcome to Address Book Computation Problem\n";
	}

	/**
	 * Function to add New AddressBook
	 * Non-Parameterized Function
	 */
	public function addNewAddressBook()
	{
		$bookName = readline('Enter Name of the Address Book: ');
		if (array_key_exists($bookName, $this->addressBookArray)) {
			echo "AddressBook with this name exists, Enter new name.";
			$this->addNewAddressBook();
		} else {
			$this->addressBookArray[$bookName] = NULL;
			//array_push($this->array[$bookName], $this->addressBook);
			$newBook = readline('1.To add another book or press any key to exit. ');
			if ($newBook == 1) {
				$this->addNewAddressBook();
			}
		}
	}

	/**
	 * Function to add New Contacts to the AddressBook
	 * Non-Parameterized Function
	 */
	public function addNewContact()
	{
		$bookName = readline('Enter name of the AddressBook to add the contact: ');
		$number = readline('Enter number of contacts to add: ');
		if (array_key_exists($bookName, $this->addressBookArray)) {
			for ($i = 0; $i < $number; $i++) {
				$firstName = readline('Enter First Name: ');
				foreach ($this->addressBookArray as $key => $values) {
					if ($key == $bookName) {
						if ($values == NULL) {
							$this->addressBookArray[$bookName][$i] = $this->addressBook->addNewContact($firstName);
							echo "Contact added successfully. \n";
							break;
						}
						for ($j = 0; $j < $number; $j++)
						{
							if ($firstName == $values[$j]->getFirstName()) {
								echo "The entered person is already exist.\n";
								$i--;
								break;
							} else {
								$this->addressBookArray[$bookName][$i] = $this->addressBook->addNewContact($firstName);
								echo "Contact added successfully. \n";
								break;
							}
						}
					}
				}
			}
		} else {
			echo $bookName . " AddressBook not found.";
		}
	}

	/**
	 * Function to edit Contact from AddressBook using First Name
	 * Non-Parameterized Function
	 */
	public function editContactInAddressBook()
	{
		$bookName = readline('Enter Name of the AddressBook to edit contact: ');
		$editName = readline('Enter First Name of the person to edit contact: ');
		if (array_key_exists($bookName, $this->addressBookArray)) {
			foreach ($this->addressBookArray as $key => $values) {
				for ($i = 0; $i < count($values); $i++) {
					$person = $values[$i];
					if ($editName == $person->getFirstName()) {
						$this->addressBookArray[$key][$i] = $this->addressBook->editContact($values[$i]);
					}
				}
			}
		} else {
			echo $bookName . " AddressBook doesn't exist, Please enter correct book name.";
			$this->editContactInAddressBook();
		}
	}

	/**
	 * Function to Delete an AddressBook
	 * Non-Parameterized Function
	 */
	public function deleteAddressBook()
	{
		$bookName = readline('Enter Name of Address Book to delete: ');
		if (array_key_exists($bookName, $this->addressBookArray)) {
			unset($this->addressBookArray[$bookName]);
		} else {
			echo $bookName . " AddressBook doesn't exist, Please enter correct name.";
			$this->deleteAddressBook();
		}
	}

	/**
	 * Function to Delete Contact from AddressBook
	 * Non-Parameterized Funciton
	 */
	public function deleteContactFromAddressBook()
	{
		$bookName = readline('Enter Name of Address Book to delete the contact in it: ');
		$deleteName = readline('Enter First Name of the person to delete contact: ');
		if (array_key_exists($bookName, $this->addressBookArray)) {
			foreach ($this->addressBookArray as $key => $values) {
				for ($i = 0; $i < count($values); $i++) {
					$person = $values[$i];
					if ($deleteName == $person->getFirstName()) {
						unset($this->addressBookArray[$key][$i]);
					} else {
						echo $bookName . "AddressBook doesn't have " . $deleteName . " contact";
					}
				}
			}
		} else {
			echo $bookName . " AddressBook doesn't exist, Please enter correct name.";
			$this->deleteContactFromAddressBook();
		}
	}

	/**
	 * Function to show all the Contacts from the AddressBook
	 * Non-Parameterized Function
	 */
	public function showContactsFromAddressBook()
	{
		$bookName = readline('Enter Name of the AddressBook: ');
		foreach ($this->addressBookArray as $key => $values) {
			if ($key == $bookName) {
				echo $key . " AddressBook";
				foreach ($values as $contact) {
					echo $contact . "\n";
				}
			} else {
				echo "\nAddressBook Not Found";
			}
		}
	}
}
