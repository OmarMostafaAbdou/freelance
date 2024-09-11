<?php
ini_set('session.use_only_cookies',1);
ini_set('session.use_strict_mode',1);

session_set_cookie_params([
    'lifetime' => 1800,
    'domain' => 'localhost',
    'path' => '/',
    'secure' =>true,
    'httponly' => true
]);


session_start();

/**we're gonna check if there is a user logged in*/
// if(isset($_SESSION["user_id"])){
//     if (!isset($_SESSION['last_regeneration'])){
//         print_r($_SESSION);
//         // regenerate_session_id_loggedin();
//         print_r($_SESSION);
//         // $_SESSION['last_regeneration'] = time();
//     }}
    // }else{
    //     $interval = 60 * 30;
    //     if(time() - $_SESSION['last_regeneration'] >= $interval){
    //         regenerate_session_id_loggedin();
    //         // $_SESSION['last_regeneration'] = time();
    //     }
    // }}
// }else{
//     if (!isset($_SESSION['last_regeneration'])){
//         regenerate_session_id();
//         // $_SESSION['last_regeneration'] = time();
//     }else{
//         $interval = 60 * 30;
//         if(time() - $_SESSION['last_regeneration'] >= $interval){
//             regenerate_session_id();
//             // $_SESSION['last_regeneration'] = time();
//         }
//     }
// }

// function regenerate_session_id(){
//         session_regenerate_id(true);
//         $_SESSION['last_regeneration'] = time();
// }


/** i want to make another function to append the user id
 * actually regenerate the id once we're logged into the
 * website
*/
// function regenerate_session_id_loggedin(){
//     session_regenerate_id(true);

//     $userId = $_SESSION["user_id"];
//     $newSessionId = session_create_id();
//     $sesionId = $newSessionId . "_" . $userId;
//     session_id($sesionId);

//     $_SESSION['last_regeneration'] = time();
// }