<?php

include 'contact.php';
include 'contactlist.php';

// Creating the list of contacts
$MyContactList = new ContactsList();

// Creating some contacts
$contact1 = new Contact("Juan Perez", "123456789");
$contact2 = new Contact("Maria Lopez", "987654321");
$contact3 = new Contact("Carlos Martinez", "555555555");

// Registering some contacts
$MyContactList->addContact($contact1);
$MyContactList->addContact($contact2);
$MyContactList->addContact($contact3);

// Listing all contacts
$MyContactList->getContacts();

// Looking up a contact by name
$MyContactList->lookupContact("Maria Lopez");
$MyContactList->lookupContact("Ana Gomez");  // Doesn't exist, should say it doesn't exist
?>