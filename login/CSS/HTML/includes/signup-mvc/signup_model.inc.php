<?php

/** i'm gonna activate something called strict types
 * and its something that prevents errors from happening
 * in our code if i'm gonna write type or something
 * and its also called type declaration
 */

/** we don't need to call the database file because its
 * called in the signup file before the model
 */
 declare(strict_types=1);

 function get_username(object $pdo, string $username){
    $query ="SELECT username From users WHERE username = :username;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":username", $username);
    $stmt->execute();

    /**now we need to check if we grapped a raw data when
     * we search for a username whatever the username is,
     * fetch gonna grap one piece of data and fetch_assoc
     * in an assoc array form as a column not an index
     */
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
 }

 function get_email(object $pdo, string $email){
    $query = "SELECT email FROM users WHERE email = :email;";
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(":email", $email);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    return $result;
 }

 function get_firstname(object $pdo, string $firstname){
   $query = "SELECT firstname FROM users WHERE firstname = :firstname;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":firstname", $firstname);
   $stmt->execute();
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}

function get_lastname(object $pdo, string $lastname){
   $query = "SELECT lastname FROM users WHERE lastname = :lastname;";
   $stmt = $pdo->prepare($query);
   $stmt->bindParam(":lastname", $lastname);
   $stmt->execute();
   $result = $stmt->fetch(PDO::FETCH_ASSOC);
   return $result;
}
 function set_user(object $pdo, string $password,string $username, string $email, 
 string $firstname, string $lastname, string $role){
    $query ="INSERT INTO users (username, email, password, firstname, lastname, role)
     VALUES (:username, :email, :password, :firstname, :lastname, :role);";
    $stmt = $pdo->prepare($query);

    $options = [
        'cost' => 12
    ];
        
    
    $hashedPwd = password_hash( $password, PASSWORD_BCRYPT ,$options);

    $stmt->bindParam(":username", $username);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":password", $hashedPwd);
    $stmt->bindParam(":firstname", $firstname);
    $stmt->bindParam(":lastname", $lastname);
    $stmt->bindParam(":role", $role);

    $stmt->execute();
 }
