<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

require_once("../Model/loginModel.php");

// require_once("twoFACodeSend.php  ");

if (isset($_POST["login"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $_SESSION["email"] = $email;
    
    $storedEmail = $_SESSION["email"];
    $type = get_Type($storedEmail);
    //--------------------------------------------------HashingPassword
    function passwordHash($password)
    {
        $hashedPassword = "";
        for ($i = 0; $i < strlen($password); $i++) {
            $char = $password[$i];
            $ascii = ord($char);
            $hashedAscii = $ascii + 3;
            $hashedChar = chr($hashedAscii);
            $hashedPassword .= $hashedChar;
        }
        return $hashedPassword;
    }
    $hashedPassword = passwordHash($password);

    $status = login($email, $hashedPassword);
   
    if ($status) 
    {
        if ($type['type'] == "Admin")
        {
            $_SESSION["flag"] = true;
            header("location: ../View/adminLanding.php");
            $_SESSION["adminAuthenticated"] = true;
        }
        else 
        {
            $_SESSION["flag"] = true;            
            header("location: ../View/customerLanding.php");
            $_SESSION["customerAuthenticated"] = true;
        } 
        
    } 
    else 
    {
        echo "Invalid username/password";
    }
}
?>