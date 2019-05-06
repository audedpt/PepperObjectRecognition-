<?php
$name = $_POST['OK'];
echo "je suis server";
shell_exec("C:\xampp\htdocs\PepperProject $name"); //to change 
echo "le script est executée";
echo "valeur envoyée " .$name;
?>