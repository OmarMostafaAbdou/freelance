<?php

/** now i'm gonna check if the user access
 * this page by submiting the button or by
 * injection with the url the i will send
 * him back with the header function the index
 */
if ($_SERVER['REQUEST_METHOD'] === "POST") {

    // $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $name = $_POST['name'];


    if (isset($_POST['role'])) {
        $role = $_POST['role'];
    } else {
        $role = ""; // Handle the case when no role is selected
    }
    
    try {
        /**the arrangement is so important , the model after
         * the connection and then the controlle and between
         * them the vie*/
        require_once 'dbh.inc.php';
        require_once 'signup-mvc/signup_model.inc.php';
        require_once 'signup-mvc/signup_view.inc.php';
        require_once 'signup-mvc/signup_contr.inc.php';

        // error handlers
        /** the first thing we're gonna do on the try here after
         * graping the files is the error handler, the error handler 
         * is the way that going and make any sort of prevention to
         * make sure that things work appropriatly(work corrctly in
         * the code) , so i'm gonna go to the contr to make the function
         */

        $errors = [];
        /**1- i wanna check if there isn't any empty input before the
         * user submit the form
         */
        //caming back to check and call the function
        if (is_input_empty($password, $email, $name)) {
            $errors["empty_input"] = "fill in all fields!";
        }

        if (is_email_invalid($email)) {
            $errors["invalid_email"] = "invalid email is used!";
        }

        // if (is_username_taken($pdo, $username)) {
        //     $errors["username_taken"] = "username is already taken!";

        // }

        if (is_email_registered($pdo, $email)) {
            $errors["email_used"] = "this email is already registered";
        }

        if (is_weak_password($password)) {
            $errors["password_weak"] = "Password is not strong enough. Please use a stronger password.";}

        if (is_password_notmatch($password, $confirm_password)){
            $errors["password_notmatch"] = "password doesn't match the confirmed password";
        }
        // } else {
        //     echo "Password is strong!";
        // }
        /**so now i have a bunch of error handlers tha i need to
         * handle their message with associative array of key and
         * value , i'm gonna put it before them
         */


        require_once 'config_session.inc.php';


         /**if there is no data inside this array this means the return false
          * and there is no errors but if there is alot of errors you've to go
          back to the index and we're gonna print all the error inside the index
          */

          /**we also need to take the data that the user submitted wrong
           * and send it back to the index page in order to not write it agin
           * and modify it
           * to make this
           * 1- we make sure that we send data that the user submitted back to
           * the signup page to show it in the input
           * 2- show it inside the input
           */
        if($errors){
            $_SESSION['errors_signup'] =  $errors;

            $signup_data = [
                // "username" => $username,
                "email" => $email
            ];
            $_SESSION['signup_data'] =  $signup_data;

            header("location: ../signup.php");
            die();
        }

        create_user($pdo, $password, $email, $name, $role);
        header("location: ../login.php?signup=success");
        
        $pdo = null;
        $stmt =  null;
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../signup.php");
    die();
}
