<?php

declare(strict_types=1);
/**i will make the function thats taking the data
 * the user submited in the signup form and checking
 *  if its empty or not, remember that we're passing
 * data from outside the function and its important
 */


/**to put another layer of error protection we may put
 * the data type of the parameter
 */
function is_input_empty( $password, $email, 
 $name)
{
    /**checking if the data is empty or there's a value
     * inside them with the function empty
     */
    if (empty($password) || empty($email) || empty($name)) {

        /**in this case there's an error if any one of them
         * is empty its gonna return a true boolean
         */
        return true;
    } else {

        return false;
    }
    /**after writing the return i'm gonna call the function on
     * the signup.inc.php file
     */
}

function is_email_invalid(string $email)
{
    /**if its invalid email return true fo that i put ! */
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}

/**if the username is already taken */

/** here we've to daeal with database to
 * compare to the other usernames in database
 * but the only file that deal with the datbase
 * is the model so we're gonna go to it
 */

/**its an object datatype because its used the
 * pdo to connect with the database
*/
// function is_username_taken(object $pdo, string $username)
// {
//     /**if the username in the data base return true if its not
//      * return false
//      */
//     if (get_username($pdo, $username)) {
//         return true;
//     } else {
//         return false;
//     }
// }

function is_email_registered(object $pdo, string $email){
    if (get_email($pdo, $email)) {
        return true;
    } else {
        return false;
    }
}

function is_weak_password(string $password) {
    /** Check if the password meets the strength requirements */
    $length = strlen($password);
    $has_lowercase = preg_match('/[a-z]/', $password);
    $has_uppercase = preg_match('/[A-Z]/', $password);
    $has_digit = preg_match('/[0-9]/', $password);
    // $has_special_char = preg_match('/[^a-zA-Z0-9]/', $password);

    /* security needs */
    $min_length = 8;
    $min_lowercase = 1;
    $min_uppercase = 1;
    $min_digit = 1;
    $min_special_char = 1;

    if (
        $length >= $min_length &&
        $has_lowercase >= $min_lowercase &&
        $has_uppercase >= $min_uppercase &&
        $has_digit >= $min_digit
        // $has_special_char >= $min_special_char
    ) {
        return false;
    } else {
        return true;
    }
}

function is_password_notmatch(string $password, string $confirm_password){
    if($password === $confirm_password){
        return false;
    }else{
        return true;
    }
}


function create_user(object $pdo, string $password, string $email, string $name, string $role){
    set_user($pdo, $password, $email, $name, $role);
}
