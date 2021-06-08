<?php

 $username = $_POST['reg_user'];
 $password = $_POST['pass'];

 //ctoney ctoney123
 if ($username =='admin' AND $password=='123') {
    echo "You have logged in!";
    <a href="../index.html"></a>
     
} else if ($username =='croney' AND $password=='ctoney123') {
    echo "you have logged in!";
} else {
    echo "You have not requested a login form!";
}
?>