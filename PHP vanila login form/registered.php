<?php 
include 'function.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['mail'];

    checkSameUsername($username);
    usernameLength($username);
    emptySpace($username);
    specialChar($username);
    passwordLength($password);
    passwordCheck($password);
    validEmail();
    emailCheck($email);
    checkSameEmail($email);
    
    // $password = md5($password);
    if ( isEmpty()) {
        file_put_contents('data.txt', "$email,$username=$password", FILE_APPEND);
        redirect(REGISTERED, "success=register&user=$username");
        die();
    }
    else {
    file_put_contents('data.txt', PHP_EOL . "$email,$username=$password", FILE_APPEND);
    redirect(REGISTERED, "success=register&user=$username");
        die();
    }
   
   
}

?>

<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
         <?php  
         
         SuccessMessage();
         ErrorMessage();
         unsuccessMessage();
         buttonSign(); 
         buttonSignToLogin();
           ?>
        </div>
    </div>
       
    </div>


   

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</html>