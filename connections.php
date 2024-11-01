<?php

if(isset($_POST['submit'])) {
    $uname = $_POST['uname']; 
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    $servername = "localhost";
    $username = "final_coffee";
    $password = "coffee_final";
    $dbname = "final_coffee";
    
    
    $regs = mysqli_connect($servername, $username,$password, $dbname);
    
    if (!$regs){
    
        echo 'Connection error: ' .mysqli_connect_error();
    
    } else{
        $sql = "INSERT INTO `register` (UserName, Email, Password) VALUES ('$uname', '$email', '$pass')";
        
        
        
        if (mysqli_query($regs, $sql)){
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($regs);
        }
        
    
    }
    
    
    mysqli_close($regs);
}

?>

