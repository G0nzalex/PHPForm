<?php

if (isset($_POST['frm'])){
// Variables associés aux inputs
    $lastname = htmlentities(trim($_POST['lastname'])) ?? '';
    $firstname = htmlentities(trim($_POST['firstname'])) ?? '';
    $adress = htmlentities(trim($_POST['adress'])) ?? '';
    $pc = htmlentities(trim($_POST['pc'])) ?? '';
    $country = htmlentities(trim($_POST['country'])) ?? '';
    $phone = htmlentities(trim($_POST['phone'])) ?? '';
    $email = htmlentities(trim($_POST['email'])) ?? ''; 
    $birthdate = htmlentities(trim($_POST['birthdate'])) ?? '';

// Vérifications

    $exception = array();

    if (strlen($lastname) === 0)
        array_push($exception, "Type your last name");
    elseif (!ctype_alpha($lastname))
        array_push($exception, "Use characters to type your last name");
    if (strlen($firstname) === 0)
        array_push($exception, "Type your first name");
    elseif (!ctype_alpha($lastname))
        array_push($exception, "Use characters to type your last name");
    if (strlen($adress) === 0)
        array_push($exception, "Type your adress");
    if (strlen($pc) === 0)
        array_push($exception, "Type your postal code");
    elseif (!ctype_digit($pc))
        array_push($exception, "Use number to type your postal code");
    else{
        $errormsg = "<ul>";
        $i = 0;
        do{
            $errormsg .= "<li>";
            $errormsg .= $exception[$i];
            $errormsg .= "</li>";
            $i++;
        }   while ($i < count($exception));

        $errormsg .= "</ul>";
        echo $errormsg;
    }
    echo $exception;
}
include 'body.php';