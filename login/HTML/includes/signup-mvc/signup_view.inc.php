<?php

declare(strict_types=1);

// Example usage:
// $password = "MyStrongP@ss1";


/**i will make a function for signup inputs */
// function signup_inputs(){
    /**we're going to check if there's a data
     * coming with the get method (the data that)
     * that is in the $signup_data array and session
     */

     /**we're gonna check if there's a session running
      * called signup_data , and i want to check for a
      * specific data like username and email not all
      * the data
      */

      /**if the username is already taken we don't want
       * to type it again so, we want to check for this
       * error too
      */

      /** so we're checking if we're having data and we
       * don't have error messages of the type user_taken
       * so we will show the data that user submitted inside
       * our input and the way of showing data inside our input
       * is to add a value inside the input tag*/




   
    // if (isset($_SESSION['signup_data']['username']) &&
    // !isset($_SESSION['errors_signup']['username_taken'])){
    //     echo'  <div class="form-outline mb-4">
    //     <input type="text" name="username" id="form3Example1cg"
    //     class="form-control form-control-lg"
    //     value="' . $_SESSION['signup_data']['username'] . '" />       <label class="form-label" for="form3Example1cg">Your Name</label>
    // </div>';

        /**but if we don't have any sort of data sent back and
         * we've an error message we want to show the regular
         * input without any sort of data inside it
         */
//     } else{
//         echo' <input type="text" name="username" id="form3Example1cg"
//         class="form-control form-control-lg"  />';
//     }

//     if (isset($_SESSION["signup_data"]["email"]) &&
//     !isset($_SESSION["errors_signup"]["email_used"]) &&
//     !isset($_SESSION["errors_signup"]["invalid_email"])){
//         echo'        <div class="form-outline mb-4">
//         <input type="email" name="email" id="form3Example1cg"
//         class="form-control form-control-lg"
//         value="' . $_SESSION['signup_data']['email'] . '" />       <label class="form-label" for="form3Example3cg">Your Email</label>
//     </div>';
//     } else{
//         echo' <input type="email" name="email" id="form3Example1cg"
//         class="form-control form-control-lg"  />';

//     }

//     echo '   <div class="form-outline mb-4">
//     <input type="password" name="password" id="form3Example4cg" class="form-control form-control-lg" />
//     <label class="form-label" for="form3Example4cg">Password</label>
// </div>';
// }

/** "errors_signup" is the session we've in the signup.php
 * file that equals to the array of errors */
function check_signup_error(){
    if(isset($_SESSION["errors_signup"])){
        $errors = $_SESSION["errors_signup"];

        echo "<br>";

        /**for each error appears print its message of error */
        foreach ($errors as $error){
           echo '<p style="color: red !important; font-weight: bolder !important;" class="text-center">' .$error . '</p>';
        }

        /**if there's errors */
        unset($_SESSION["errors_signup"]);

        /**if there is no errors i wanna check that signup success
         * in the condition we checcking if we're getting a data
         * with the get method that we wrote on the header after
         * creating the user , the key signup === the values success
         *  then we're gonna print the message
        */
    }elseif (isset($_GET['signup']) && $_GET["signup"] === "success"){

        echo '<br>';
        echo '<p style="color: green !important; font-weight: bolder !important;" class="text-center">SIGNUP SUCCESS!</p>';
        unset($_SESSION["signup"]);
    }
    

}