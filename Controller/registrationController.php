<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("../Model/registrationModel.php");


if(isset($_POST["register"]))
{
    $name = $_POST['name'];    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $numericDigits = range("0", "9");

    $flag = 1;
    //--------------------------------------------------Validation of password starts here

    //----------8 characters long or not
    if(strlen($password) < 8)
    {
        echo "Your password must be 8 characters long.  <br><br>";
        $flag = 0;
    }

    //----------if contains numeric digit or not
    $hasNumericDigits = false;
    foreach($numericDigits as $digit)
    {
        if(strpos($password,$digit)!== false)
        {
            $hasNumericDigits = true;
            break;
        }
    }
    if(!$hasNumericDigits)
    {
        echo "Your password must contain at least one numeric digit.  <br><br>";
        $flag = 0;
    }

    //--------------------------------------------------HashingPassword
    function passwordHash($password)
    {
        $hashedPassword = "";
        for ($i = 0; $i <strlen($password); $i++)
        {
            $char = $password[$i];
            $ascii = ord($char);
            $hashedAscii = $ascii + 3;
            $hashedChar = chr($hashedAscii);
            $hashedPassword .= $hashedChar;
        }
        return $hashedPassword;
    }

    $hashedPassword = passwordHash($password);

    if($flag == 1)
    {
        $status = addIntoCredentials($name, $email, $hashedPassword);
        $status2 = addIntoUsers($name, $email);
        if($status && $status2)
        {
            header("location: ../View/loginReg.html");
        }
        else
        {
            echo "DB error";
        }
    }
}

?>