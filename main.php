<?php
require "User.php";
require "Customer.php";
require "PersonalTrainer.php";

$user1 = new Customer("COCOchanel","dawidoww15@gmail.com", "Dawid", "Hodurek");
$user1->cusAuthentication();
$user1->fullName();
printf("\n");
$user2 = new Customer("Hamburger","vadim15@gmail.com", "Vadim", "Procik");
$user2->cusAuthentication();
$user2->fullName();
printf("\n");

$admin1 = new PersonalTrainer("Admin123", "Admin123@gmail.com");
$admin1->adminAuthentication();
