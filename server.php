<?php
// Start session
session_start();

// Function to check if user already exists
function email_and_phone_unique($email, $phone) {
    $is_unique = true;
    if (file_exists("userDB.csv")) {
        $fp = fopen("userDB.csv", "r");
        flock($fp, LOCK_SH);
        $headings = fgetcsv($fp);
        while ($userData = fgetcsv($fp)) {
            // Testing whether email and phone are unique
            if ($userData[0] ===  $email || $userData[1] === $phone) {
                $is_unique = false;
                break;
            }
        }
        flock($fp, LOCK_UN);
        fclose($fp);
    }

    return $is_unique;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Boolean values (hidden input fields in form data) to indicate type of request to PHP server
    $REQ_TYPE = $_POST['type'];     // 0: login; 1: logout; 2: register

    if ($REQ_TYPE == 0) {
        // Login request
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            // Check if user exits
            if (file_exists('userDB.csv')) {
                $fp = fopen("userDB.csv", "r");
                flock($fp, LOCK_SH);
                $headings = fgetcsv($fp);
                $found = false;
                while ($userData = fgetcsv($fp)) {
                    // Testing whether email and phone are unique
                    if ($userData[0] ===  $_POST['email'] || $userData[1] === $_POST['phone']) {
                        $found = true;
                        // $userData[2] is password field -> verifying...
                        if (password_verify($_POST['password'], $userData[2])) {
                            // Updates user session
                            // TODO: redirects to logged in page!
                            header("Location: http://localhost:4000/Home.php");
                        } else {
                            // TODO: set error message: wrong password ($_SESSION['error_message'] = ...)
                            $_SESSION["error_message"] = "Wrong password";
                            header("Location: http://localhost:4000/Login.php");
                        }
                        break;
                    }
                }
                flock($fp, LOCK_UN);
                fclose($fp);
                if (!$found) {
                    header("Location: http://localhost:4000/Login.php");
                }
            } else {
                // Redirects back to login page because no such user exists
                header("Location: http://localhost:4000/Login.php");
            }
        }

    } else if ($REQ_TYPE == 1) {
        // Logout request
        if (isset($_SESSION["user"])) {
            // check user session -> unset user session
            unset($_SESSION["user"]);
            header("Location: http://localhost:4000/Login.php");
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
        
        // Checks if email and phone are unique
        if (!email_and_phone_unique($email, $phone)) {
            // error
            echo "Email/phone is already used!";
            header("Location: http://localhost:4000/Login.php");
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
            header("Location: http://localhost:4000/Login.php");
        }
    }   
}

?>
