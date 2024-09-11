<?php
declare(strict_types=1);

/** this function i made to display to the user if he logged in or not */
function output_name(){
    if(isset($_SESSION["user_id"])){
        echo '<p style="color: green !important; font-weight: bolder !important;" class="text-center">You are Logged in as '. $_SESSION["user_name"] .' </p>';
    }else{
        echo '<p style="color: green !important; font-weight: bolder !important;" class="text-center">You are not Logged in </p>';
    }
}

function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION["errors_login"];

        echo "<br>";

        /**for each error appears print its message of error */
        foreach ($errors as $error){
           echo '<p style="color: red !important; font-weight: bolder !important;" class="text-center">' .$error . '</p>';
        }

        /**if there's errors */
        unset($_SESSION["errors_login"]);
    }
     
    // }elseif (isset($_GET['login']) && $_GET["login"] === "success"){

    //     echo '<br>';
    //     echo '<p style="color: green !important; font-weight: bolder !important;" class="text-center">LOGIN SUCCESS!</p>';
    // }
}