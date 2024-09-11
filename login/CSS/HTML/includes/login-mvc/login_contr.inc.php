<?php
declare(strict_types=1);
/**bool because if its array if we don't have the email
 * its gonna be error but bool will return false so we
 * will compine the two data types
 */

 /**in if condition i say if results is false return true
  * this means if the email is not in database and result
  * is an empty array
  */
function is_email_wrong(bool|array $result){
    if(!$result){
        return true;
    }else{
        return false;
    }
}

/** in password it'd be true if they don't match each other
 * and false if they match each other
*/
function is_password_wrong(string $password, string $hashedPwd){
    if(!password_verify($password,$hashedPwd)){
        return true;
    }else{
        return false;
    }
}

function is_input_empty(string $password, string $email)
{
    if (empty($password) || empty($email)) {

        return true;
    } else {

        return false;
    }
}
