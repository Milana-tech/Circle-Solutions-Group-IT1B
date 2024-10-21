<?php
$error = "";
if($_SERVER["REQUEST_METHOD"]== "POST"){
$fname = filter_input(INPUT_POST,"fname");
$lname = filter_input(INPUT_POST,"lname");
$email = filter_input(INPUT_POST,"email",FILTER_VALIDATE_EMAIL);
$phone = filter_input(INPUT_POST,"phone");
$address = filter_input(INPUT_POST,"address");
$state = filter_input(INPUT_POST,"state");
$postal = filter_input(INPUT_POST,"postal");
    if(isset($_POST["submit"])){
        if(empty($fname) ||empty($lname) ||empty($email) ||empty($phone) ||empty($address) ||empty($state) ||empty($postal)){

        $error = "<p class='errors'> Please fill all of the filed</P>";

        }
        else{
            $error ="";
        }
    }    
}   
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/global.css" type="text/css">
</head>
<body>
<div class="account-info">    
    <div class="container">
        <h1>Account Setting</h1>
        <p>Below you can observe your information</p>
        <div class="errors">
            <?php
             echo $error;
            ?>

        </div>
        <h2>Profile Information</h2>
        <form action="account-info.php" method="POST">
            <div class="first">
                <label for="" class="labels">FIRST NAME</label>
                <input type="text" class="inputs" name="fname">
            </div>
            <div class="second">
                <label for="" class="labels">LAST NAME</label>
                <input type="text" class="inputs" name="lname">
            </div>
    
            <div class="first">
                <label for="" class="labels">EMAIL ADDRESS</label>
                <input type="text" class="inputs" name="email">
            </div>
            <div class="second">
                <label for="" class="labels">PHONE NUMBER</label>
                <input type="text" class="inputs" name="phone">
            </div>
        
        <h3>Change Password</h3>
        
            <div class="first">
                <label for="" class="labels">NEW PASSWORD</label>
                <input type="text" class="inputs">
            </div>
            <div class="second">
                <label for="" class="labels">CONFIRM NEW PASSWORD</label>
                <input type="text" class="inputs">
            </div>
        
        <h4>Address</h4>
        
            <div class="full">
                <label for="" class="labels">SHIPPING ADDRESS</label>
                <input type="text" class="address" name="address">
            </div>
        
            <div class="first">
                <label for="" class="labels">STATE</label>
                <input type="text" class="inputs radius" name="state">
            </div>
            <div class="second">
                <label for="" class="labels">ZIP CODE</label>
                <input type="text" class="inputs" name="postal">
            </div>
        
            <input class="submit" type="submit" value="Save Changes" name="submit">
        </form>
    </div>
</div>    
</body>
</html>