<?php

include 'constants.php';
function validation()
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        redirect(INDEX_PAGE);
    }
}
//-------LOGIN----------
function checkLogin($username, $password)
{
    $data = file_get_contents("data.txt");
    $users = explode(PHP_EOL, $data);
    foreach ($users as $user) {
        $profile = explode(",", $user);
        $arr = array_shift($profile);
        foreach ($profile as $checks) {
            $user = explode('=', $checks);
            if ($user[0] == $username && $user[1] == $password) {
                redirect(LOGGED, "success=login&user=$username");
            }
        }
    }
    redirect(LOGGED, 'error=userorpass');
    die();
}

// check is empty
function isEmpty()
{
    $data = file_get_contents("data.txt");
    $length = strlen($data);
    if ($length == 0) {
        return true;
    }
    return false;
    die();
}

//////////////////////////////////
// ----------USERNAME----------
function validUsername()
{
    if (!isset($_POST['username']) || empty($_POST['username'])) {
        redirect(LOGGED, 'error=emptyuser');
        die();
    }
};

function usernameLength($username)
{
    if (strlen($username) < 4) {
        redirect(REGISTERED, 'error=usernameshort');
        die();
    }
}
function emptySpace($username)
{
    if (preg_match('" "', $username)) {
        redirect(REGISTERED, 'error=emailnotvalidspace');
        die();
    }
}

function specialChar($username)
{
    if (preg_match("/[!@#$%^&*]/", $username)) {
        redirect(REGISTERED, 'error=emailnotvalidchar');
        die();
    }
}

function checkSameUsername($name)

{
    $data = file_get_contents("data.txt");
    $users = explode(PHP_EOL, $data);
    foreach ($users as $user) {
        $username = explode("=", $user);
        $arr = array_pop($username);
        foreach ($username as $profile) {
            $nickname = explode(",", $profile);
            if (strtolower($nickname[1]) == strtolower($name)) {
                redirect(REGISTERED, 'error=takenusername');
                die();
            }
        }
    }
}
///////////////////////////
//---------PASSWORD------------
function validPasssword()
{

    if (!isset($_POST['password']) || empty($_POST['password'])) {
        redirect(LOGGED, 'error=emptypass');
        die();
    }
}

function passwordLength($password)
{
    if (strlen($password) < 6) {
        redirect(REGISTERED, 'error=passshort');
        die();
    }
}

function passwordCheck($password)
{
    if (
        !preg_match("/[a-z]/", $password)
        || !preg_match("/[0-9]/", $password)
        || !preg_match("/[!@#$%^&*]/", $password)
        || !preg_match("/[A-Z]/", $password)
    ) {
        redirect(REGISTERED, 'error=passnotvalid');
        die();
    }
}
////////////////////////////////////////////
// ----------- EMAIL ----------
function filterEmail($email)
{
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        redirect(REGISTERED, 'error=notvalid');
        die();
    }
}

function validEmail()
{

    if (!isset($_POST['mail']) || empty($_POST['mail'])) {
        redirect(REGISTERED, 'error=emptymail');
        die();
    }
}

function emailCheck($email)
{
    $arr = explode('@', $email);
    if (strlen($arr[0]) < 5) {
        redirect(REGISTERED, 'error=emailshort');
        die();
    }
}
function checkSameEmail($email)
{
    $data = file_get_contents("data.txt");
    $users = explode(PHP_EOL, $data);
    foreach ($users as $user) {
        $username = explode("=", $user);
        foreach ($username as $profile) {
            $mail = explode(",", $profile);
            if ($mail[0] == $email) {
                redirect(REGISTERED, 'unsuccess=emailused');
                die();
            }
        }
    }
}
////////////////////////////////////////




//errors
function ErrorMessage()
{
    $errorMsg = [
        'usernameshort' => 'Username must be at least 4 characters.',
        'passshort' => 'Password must be at least 6 characters.',
        'passnotvalid' => 'Password must contain at least 1 lowercase, uppercase, number and special character.',
        'general' => 'An error occured. Please try again later.',
        'takenusername' => 'Username taken, choose another one.',
        'userorpass' => 'Wrong username or password combination',
        'emptyuser' => 'Username field is required',
        'emptypass' => 'Password field is required',
        'emptymail' => 'Email field is required',
        'emailshort' => 'Email should have at least 5 characters before @',
        'emailnotvalidspace' => 'It is not allowed to use empty space for username',
        'emailnotvalidchar' => 'It is not allowed to use special sign for username',
        'notvalid' => 'Incorect email'

    ];

    if (isset($_GET['error'])) {
        echo '<p class="alert alert-danger">' . $errorMsg[$_GET['error']]  . '</p>';
    }
}

//unsuccess
function unsuccessMessage()
{
    $unsuccessMsg = [
        'emailused' => 'You are already registered.You password is '
    ];
    if (isset($_GET['unsuccess'])) {
        echo '<p class="alert alert-warning">' . $unsuccessMsg[$_GET['unsuccess']]  .  '</p>';
    }
}

//success
function SuccessMessage()
{
    $successMsg = [
        'login' => "Welcome ",
        'register' => "Welcome "
    ];
    if (isset($_GET['success'])) {

        echo '<p class="alert alert-success">' . $successMsg[$_GET['success']] . ucfirst($_GET['user']) .  '</p>';
    }
}


//redirecting
function redirect($url, $query = '')
{
    if ($query != '') {
        $url .= "?$query";
    }

    header("Location:" . $url);
    die();
}
function buttonLogin()
{
    if (isset($_GET['unsuccess']) || isset($_GET['error'])) {
        echo "<button class='btn bg-danger '><a class='text-white' href='login.php'>Back to login</a></button>";
    }
}
function buttonSign()
{
    if (isset($_GET['unsuccess']) || isset($_GET['error'])) {
        echo "<button class='btn bg-danger'><a class='text-white' href='signup.php'>Back to Sign up</a></button>";
    }
}

function buttonSignToLogin()
{
    if (isset($_GET['success'])) {
        echo "<button class='btn bg-success'><a class='text-white' href='login.php'>Login</a></button>";
    }
}

function buttonLogout()
{
    if (isset($_GET['success'])) {
        echo "<button class='btn bg-primary'><a class='text-white' href='index.php'>Logout</a></button>";
    }
}
