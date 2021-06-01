<?php
session_start();
// Function to check if user already exists
function email_unique($email, $db_file) {
    $is_unique = true;
    if (file_exists($db_file)) {
        $fp = fopen($db_file, "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        while ($userData = fgetcsv($fp)) {
            // Testing whether email and phone are unique
            if ($userData[0] ===  $email) {
                $is_unique = false;
                break;
            }
        }
        flock($fp, LOCK_UN);
        fclose($fp);
    }
    return $is_unique;
}
// Function to check email regex
function is_email($email) {
    $is_email = true;
    $regex = '/^(?!\.)(?!.*\.$)(?!.*?\.\.)^([a-zA-Z\d\-.]+)@([a-zA-Z\d\-.]+)\.([a-zA-Z]{2,5})$/';
    if(!preg_match($regex, $email)){
        $is_email = false;
    }
    return $is_email;
}
// Function to check phone regex
function is_phone($phone) {
    $is_phone = true;
    $regex = '/^\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?\d{1}[-\s\.]?[\d{1}]?[-\s\.]?[\d{1}]?$/';
    /*regex reference from https://riptutorial.com/regex/example/18996/a-password-containing-at-least-1-uppercase--1-lowercase--1-digit--1-special-character-and-have-a-length-of-at-least-of-10*/
    if(!preg_match($regex, $phone) ){
        $is_phone = false;
    }
    return $is_phone;
}
// Function to check password regex
function is_password($password) {
    $is_password = true;
    $regex = '/^(?=.{4,20}$)(?=.*?[a-z])(?=.*?[A-Z])(?=.*?[0-9])(?=.*?\W)/';
    if(!preg_match($regex, $password)){
        $is_password = false;
    }     
    return $is_password;
}
// Function to check if user already exists (2 different functions for email and phone so there can be different error messages)
function phone_unique($phone, $db_file) {
    $is_unique = true;
    if (file_exists($db_file)) {
        $fp = fopen($db_file, "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        while ($userData = fgetcsv($fp)) {
            // Testing whether email and phone are unique
            if ($userData[1] === $phone) {
                $is_unique = false;
                break;
            }
        }
        flock($fp, LOCK_UN);
        fclose($fp);
    }
    return $is_unique;
}

// Function to login with specified database path
function login($db_fp, $redirect_flag) {
    // Check if user exits
    if (file_exists($db_fp)) {
        $fp = fopen($db_fp, "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        $found = false;
        while ($userData = fgetcsv($fp)) {
            // Testing whether email and phone are unique
            if ($userData[0] === $_POST['email']) {
                $found = true;
                // $userData[2] is password field -> verifying...
                if (password_verify($_POST['password'], $userData[2])) {
                    // Updates user session
                    $_SESSION['user'] = true;
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['role'] = 'user';
                    if ($db_fp === "adminDB.csv") {
                        $_SESSION['role'] = 'admin';
                    }
                    header("Location: MyAccount(logged-in).php");
                } else {
                    $_SESSION['error_message'] = true;
                    header("Location:Login.php");
                }
                return true;
            }
        }
        flock($fp, LOCK_UN);
        fclose($fp);
        if (!$found) {
            if ($redirect_flag) {
                header("Location: Login.php");
            }
            return false;
        }
    } else if ($redirect_flag) {
        // Redirects back to login page because no such user exists
        header("Location: Login.php");
    }

    return false;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Boolean values (hidden input fields in form data) to indicate type of request to PHP server
    $REQ_TYPE = $_POST['type'];     // 0: login; 1: logout; 2: register
    if ($REQ_TYPE == 0) {
        // Login request
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // Login
            $found_as_admin = login("adminDB.csv", false);
            if (!$found_as_admin) {
                login("userDB.csv", true);
            }
        }
    } else if ($REQ_TYPE == 1) {
        // Logout request
        if (isset($_SESSION['user']) && $_SESSION['user'] == true) {
            // check user session -> unset user session
            unset($_SESSION['user']);
            header("Location: Login.php");
        }
    } else if ($REQ_TYPE == 2) {
        // Sign up request
        $email = "";
        if(isset($_POST['email'])){
            $email = $_POST['email'];
        }
        $phone = "";
        if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
        }
        $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $conpassword = password_hash($_POST['conpassword'], PASSWORD_BCRYPT);
        $firstName = $_POST['fname'];
        $lastName = $_POST['lname'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $zipCode = $_POST['zipcode'];
        $country = $_POST['country'];
        $accountType = $_POST['account_type'];
        // If accountType == 'store owner'
        $busName = $_POST['business'];
        $storeName = $_POST['store'];
        $storeCategory = $_POST['category'];
        
        /* Form Validation */
        $has_error = false;
        // Checks if first name length is smaller than 3
        if(trim(strlen($firstName)) < 2){
            //error
            $_SESSION['fname_error'] = true;
            $has_error = true;
        }
        // Checks if last name length is smaller than 3
        if(trim(strlen($lastName)) < 2){
            //error
            $_SESSION['lname_error'] = true;
            $has_error = true;
        }
        // Checks if address length is smaller than 3
        if(trim(strlen($address)) < 3){
            //error
            $_SESSION['address_error'] = true;
            $has_error = true;
        }
        // Checks if city length is smaller than 3
        if(trim(strlen($city)) < 3){
            //error
            $_SESSION['city_error'] = true;
            $has_error = true;
        }
        // Checks if email is valid
        if(!is_email($email)) {
            //error
            $_SESSION['email_error'] = true;
            $has_error = true;
        }
        // Checks if phone is valid
        if(!is_phone($phone)) {
            //error
            $_SESSION['phone_error'] = true;
            $has_error = true;
        }        
        // Checks if password is valid
        if(!is_password($_POST['password'])) {
            //error
            $_SESSION['password_error'] = true;
            $has_error = true;
        }
        // Checks if both password fields are the same
        if($_POST['password'] !== $_POST['conpassword']) {
            //error
            $_SESSION['conpassword'] = true;
            $has_error = true;
        }
        // Checks if zipcode is between 4-6 digits
        if(trim(strlen($zipCode)) < 4 || trim(strlen($zipCode)) > 6) {
            //error
            $_SESSION['zipcode_error'] = true;
            $has_error = true;
        }
        // Checks if email and phone are unique
        if (!email_unique($email, "userDB.csv") || !email_unique($email, "adminDB.csv")) {
            // error
            $_SESSION['email_used'] = true;
            $has_error = true;
        } 
        if (!phone_unique($phone, "userDB.csv") || !phone_unique($phone, "adminDB.csv")) {
            // error
            $_SESSION['phone_used'] = true;
            $has_error = true;
        } 
        if ($accountType == null) {
            $_SESSION['account_error'] = true;
            $has_error = true;
        }

        if ($has_error) {
            header("Location: Register.php");
        } else {
            // is unique
            $file = fopen('userDB.csv', 'a');    // Append to database if csv exists
            flock($file, LOCK_EX);
            if(!file_exists("userDB.csv")) {
                $file = fopen('userDB.csv', 'w');   // Write to file if database does not exist
            }
            // Saves user to csv file
            fputcsv($file, array($email, $phone, $password, $conpassword, $firstName, $lastName, 
                $address, $city, $zipCode, $country, $accountType, $busName, 
                $storeName, $storeCategory));
            flock($file, LOCK_UN);
            fclose($file);
            // Registration finishes -> redirects to login page
            // header("Location: http://localhost:4000/asd.php");
            header("Location:Login.php");
        }
    }   
}
?>