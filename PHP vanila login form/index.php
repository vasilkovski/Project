<?php
include 'function.php';


    if (isset($_POST["login"])){
        header('Location: login.php');

    }
    if (isset($_POST['signup'])){
        header('Location: signup.php');

    }

?>

<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <style>
       
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center">
                <img class="w-50" src="https://www.shutterstock.com/blog/wp-content/uploads/sites/5/2019/07/Man-Silhouette.jpg">
            </div>
        </div>
        
        <form method="POST">
        <div class="row">
            <div class="col-md-12 text-center mt-3">
                <button type="submit" name="login" class="btn-primary p-2 mr-3">Login</button>
                <button type="submit" name="signup" class="btn-primary p-2 ml-3" >Sign up</button>
            </div>
        </div>
        </form>
    </div>







</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>



