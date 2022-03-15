<?php
require "User.php";
require "Customer.php";
require "PersonalTrainer.php";

$user1 = new Customer("COCOchanel","dawidoww15@gmail.com", "Dawid", "Hodurek");
$user1->custAuthentication();
$user1->fullName();
$user1->login();
$user1->logOut();
printf("\n");
$user2 = new Customer("Hamburger","vadim15@gmail.com", "Vadim", "Procik");
$user2->custAuthentication();
$user2->fullName();
$user2->login();
$user2->logOut();
printf("\n");

$admin1 = new PersonalTrainer("PT123", "PT123@gmail.com");
$admin1->adminAuthentication();
$admin1->login();
$admin1->logOut();
