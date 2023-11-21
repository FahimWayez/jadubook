    <?php
    require_once("databaseConnection.php");
    function getProfile($email)
    {
        $conn = dbConnection();
        $sql = "SELECT * from `jadubook`.`users` where email = '{$email}'";
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($result);
        
        return $row;
    }
    function updateProfile($email, $name, $password)
    {
        $conn = dbConnection();
        $sql3 = "UPDATE `jadubook`.`users` SET `name`='$name',`password`='$password' WHERE `email` = '$email'";
        $result3 = mysqli_query($conn, $sql3);
        return $result3;
    }
    function updateProfilePhoto($email, $profilePhoto)
    {
        $conn = dbConnection();
        $sql = "UPDATE `jadubook`.`users` SET `profilePhoto` = '$profilePhoto' WHERE `email` = '$email'";
        return mysqli_query($conn, $sql);
    }
    
?>