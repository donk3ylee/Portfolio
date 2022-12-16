<?php

session_start();
include_once("./bootstrap.php");
include_once('./processForm.functions.php');

// START send form data back to repopulate the contact form
$form_data = array();
foreach($_POST as $name => $value){   
    $_SESSION['form_data'][$name] = $value;
}
// END send form data back to repopulate the contact form

// START check for empty status for each required field
$errors = array();
foreach($_POST as $name => $value){
    if(empty($value)){
        if($name !="companyName"){
            array_push($errors, getRealName($name) ." is a required field and needs to be filled out.");
        }
    }
}
if (count($errors) != 0){
    $_SESSION['errors'] = $errors;
    header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../index.php#error_target');
    exit;
}
// END check for empty status for each required field

// START validate the email and telephone inputs
$validation_errors = array();
$results = array();
$results['emailAddress'] = filter_var($_POST['emailAddress'], FILTER_VALIDATE_EMAIL);

foreach($results as $name => $value){
    if($value == FALSE){
        array_push($validation_errors, "<p>". getRealName($name) ." is not the correct format please check.</p>");
    }
}

if (count($validation_errors) != 0){
    $_SESSION['errors'] = $validation_errors;
    header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../index.php#error_target');
    exit;
}
// END validate the email and telephone inputs

// START Sanitize post inputs and add them to the database
$filter = array(
    "firstName" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "lastName" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "emailAddress" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "subject" => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
    "message" => FILTER_SANITIZE_FULL_SPECIAL_CHARS
);

$input = filter_input_array(INPUT_POST, $filter);

try{

    $db = new DB;
    $conn = $db->get_connection();
    $query = "INSERT INTO contacts (fName, lName, email, subject, message) 
                VALUES(:fname, :lName, :email, :subject, :message)";
    $result = $conn->prepare($query);
    $result->bindParam(':fname', $input['firstName']);
    $result->bindParam(':lName', $input['lastName']);
    $result->bindParam(':email', $input['emailAddress']);
    $result->bindParam(':subject', $input['subject']);
    $result->bindParam(':message', $input['message']);
    if($result->execute()){
        $_SESSION['success'] = "Thank you for leaving a message. I will get back to you at my earliest convenience";
        unset($_SESSION['form_data']);
        header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../index.php#success_target');
        exit;
    } else {
        $_SESSION['error'] = "Something went wrong. I'm sorry but you did not leave a message this time please try again.";
        header('Location: http://'. $_SERVER['HTTP_HOST'] . $_SERVER["PHP_SELF"] .'/../../index.php#error-target');
        exit;
    }

} catch (PDOException $e) {
    throw $e;
    echo $e;
    die;
}
// END Sanitize post inputs and add them to the database
