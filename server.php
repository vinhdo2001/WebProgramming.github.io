<?php

function parse_csv_line(line) {
    $data = explode(",", line)
}

function email_and_phone_unique(email, phone) {
    $fp = fopen($filename, "r");
    flock($fp, LOCK_SH);
    $headings = fgetcsv($fp);
    while ($aLineOfCells = fgetcsv($fp)) {
        // A single user record
        $userData[] = $aLineOfCells;
        // Testing whether email and phone are unique
        if ($userData[0] ==  email || $userData[1] == phone) {
            return false
        }
    }
    flock($fp, LOCK_UN);
    fclose($fp);

    // Are unique
    return true;
}

session_start()
// Boolean values (hidden input fields in form data) to indicate type of request to PHP server
$IS_LOGIN_REQ = $_POST['login']
$IS_LOGOUT_REQ = $_POST['logout']
$IS_REG_REQ = $_POST['register']

if ($IS_LOGIN_REQ) {
    // Login request
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        // Check if user exits
        $file = fopen('userDB.csv', 'r')
        if (file_exists('userDB.csv')) {
            $fp = fopen($filename, "r");
            flock($fp, LOCK_SH);
            $headings = fgetcsv($fp);
            while ($aLineOfCells = fgetcsv($fp)) {
                // A single user record
                $userData[] = $aLineOfCells;
                // Testing whether email and phone are unique
                if ($userData[0] ==  email || $userData[1] == phone) {
                    // $userData[2] is password field -> verifying...
                    $res = $password_verify($_POST['passwprd'], $userData[2]);
                    // Updates user session
                    $_SESSION["user"]["username"] = $_POST["username"]
                    break;
                }
            }
            flock($fp, LOCK_UN);
            fclose($fp);
        }
    }

} else if ($IS_LOGOUT_REQ) {
    // Logout request
    if (isset($_SESSION["user"])) {
        // check user session -> unset user session
        unset($_SESSION["user"])
        header("Location: /Login.html")
    }
} else if ($IS_REG_REQ) {
    // Sign up request
    $email = $_POST['email']
    $phone = $_POST['phone']
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT)
    $firstName = $_POST['firstName']
    $lastName = $_POST['lastName']
    $address = $_POST['address']
    $city = $_POST['city']
    $zipCode = $_POST['zipCode']
    $country = $_POST['country']
    $accountType = $_POST['account_type']
    // If accountType == 'store owner'
    $busName = $_POST['business_name']
    $storeName = $_POST['store_name']
    $storeCategory = $_POST['store_category']
    
    // Checks if email and phone are unique
    if (!email_and_phone_unique($email, $phone)) {
        // error
        echo "Email/phone is already used!"
    } else {
        // is unique
        $file = fopen('userDB.csv', 'a')    // Append to database if csv exists
        flock($fp, LOCK_EX);
        if(!file_exists("userDB.csv")) {
            $file = fopen('userDB.csv', 'w');   // Write to file if database does not exist
            // save the column headers
            fputcsv($file, array('email', 'phone', 'password', 'firstName', 
            'lastName', 'address', 'city', 'zipCode', 'country', 'accountType', 
            'businessName', 'storeName', 'storeCategory'));
        }
        // Saves user to csv file
        fputcsv($file, array($email, $phone, $password, $firstName, $lastName, 
            $address, $city, $zipCode, $country, $accountType, $busName, 
            $storeName, $storeCategory));
        flock($fp, LOCK_UN);
        fclose($file)

        // Registration finishes -> redirects to login page
        header("Location: /Login.html")
    }
}

?>
