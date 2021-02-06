<?php 
include 'function.php';
?>
<body>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    </head>
    <div class="container">
    <div class=" text-center ">
        <h2 class="mt-5">Login form</h2>
        <br>
        <form method="POST" action="logged.php" class="border py-5">
          <label for="user" >Username: </label>   
            <input class="rounded" id="user" type="text" placeholder="enter username" name="username">
            <br>
            <br>
            <label for="pass">Password: </label>  
             <input class="rounded" id="pass" type="password" placeholder="enter pasword" name="password">
            <br> <br>
            <button class="btn-primary">Submit</button>
            
        </form>
        <a href="index.php"> <button>Back to Home</button></a>
       </div>
    </div>
</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</html>