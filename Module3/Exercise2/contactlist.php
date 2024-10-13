<?php

class ContactsList
{
    private $contactList = array();
    private $maxContacts = 10;

    //Methods
    //Methos for registering
    public function addContact(Contact $contact)
    {
        if (count($this->contactList) < $this->maxContacts) {
            $this->contactList[] = $contact;
            echo "Contact added: " . $contact->getName() . "<br>";
        } else {
            echo "Contact list is full, no numbers can be added";
        }
    }
    //method for listing contacts
    public function getContacts()
    {
        if (count($this->contactList) > 0) {
            echo "Contact list: <br> ";
            foreach ($this->contactList as $contact) {
                echo "Name: " . $contact->getName() . " - Number: " . $contact->getNumber() . "<br> ";
            }
        } else {
            echo "Contacts list is empty\n";
        }
    }
    //method for looking for contacts
    function lookupContact($name)
    {
        foreach ($this->contactList as $contact) {
            if ($contact->getName() === $name) {
                echo "The phone number of " . $name . " is: " . $contact->getNumber() . "<br>";
                return;
            }
        }
        echo "Contact not found. <br>";
    }
}
?>