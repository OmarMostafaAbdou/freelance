<?php
if ($_SERVER['REQUEST_METHOD'] === "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    try {

        require_once 'dbh.inc.php';
        require_once 'login-mvc/login_model.inc.php';
        require_once 'login-mvc/login_contr.inc.php';

        $errors = [];

        if(is_input_empty($email, $password)) {
            $errors["empty_input"] = "fill in all fields!";
        }

        $result = get_user($pdo, $email);

        if(is_email_wrong($result)) {
            $errors["email_incorrect"] = "email address is not registered!";
        }

        if(!is_email_wrong($result) && is_password_wrong($password, $result["password"])) {
            $errors["login_incorrect"] = "Incorrect login info!";
        }

        require_once 'config_session.inc.php';
/**in login system we need to grap our users id and compine them with
 *  our session id inside our session and i do this because i have
 * to put some data for some users that uses a certain session id*/

/**1- i will create a new session id with the session_create_id() function
 * 2- i will combine between the user id with the session id
 * 3- i will set the session id to the combined session id i made
*/
        if ($errors) {
            $_SESSION['errors_login'] =  $errors;

            header("location: ../login.php");
            die();
        }

        $newSessionId = session_create_id();
        $sesionId = $newSessionId . "_" . $result["id"];
        session_id($sesionId);
        // echo $result["id"],"<br>",$newSessionId,"<br>",$sesionId;

        /**at this point we've a user that trying to login with an email
         * that is exists inside our database and a password that match
         * the password we've so we need to log the user inside
         */
        $_SESSION["user_id"] = $result["id"];
        $_SESSION["user_email"] = $result["email"];
        $_SESSION["user_username"] = $result["username"];

        $_SESSION['last_regeneration'] = time();

        // header("location: ../login.php?login=success");
        header("location:../index.html?login=success");

        $pdo = null;
        $stmt =  null;
        die();

    } catch (PDOException $e) {
        die("Query failed: " . $e->getMessage());
    }
} else {
    header("location: ../login.php");
    die();
}
