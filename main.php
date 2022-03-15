<?php
require "User.php";
require "Customer.php";

$user1 = new Customer("COCOchanel","dawidoww15@gmail.com", "Dawid", "Hodurek");
$user1->cusAuthentication();
$user1->fullName();

$admin = new Admin("Admin123", "Admin123@gmail.com");
$admin->adminAuthentication();
