<?php
require "User.php";
require "Customer.php";
require "PersonalTrainer.php";
require "Payment.php";
require "Card.php";
require "Basket.php";
require "Order.php";
require "Promo.php";
require "Transaction.php";
require "Plans.php";

$user1 = new Customer("Di0r","dawidoww15@gmail.com", "Dawid", "Hodurek");
$user1->custAuthentication();
$user1->login();
$user1->fullName();
$user1->logOut();

printf("\n");

$user2 = new Customer("Hamburger","vadim15@gmail.com", "Vadim", "Procik");
$user2->custAuthentication();
$user2->login();
$user2->fullName();
$user2->logOut();

printf("\n");

$admin1 = new PersonalTrainer("PT123", "PT123@gmail.com", "Vadim");
$admin1->adminAuthentication();
$admin1->login();
$admin1->logOut();
