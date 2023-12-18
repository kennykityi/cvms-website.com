<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['name'];
    $gender = isset($_POST['option']) ? $_POST['option'] : '';
    $phone_no = $_POST['hp'];
    $ic_no = $_POST['ic'];
    $email = $_POST['email'];
    $start_date = $_POST['sdate'];
    $end_date = $_POST['ndate'];
    $purpose = $_POST['purpose'];
    $visitor_com = $_POST['com'];
    $department = $_POST['depart'];

    $validName = validateName($name);
    $validIC = validateIC($ic_no);
    $validPNumber = validatePNumber($phone_no);
    $validEmail = validateEmail($email);
    $validDate = validateDate($start_date, $end_date);

    // Check validation results
    if ($validName !== true || $validIC !== true || $validPNumber !== true || $validEmail !== true || $validDate !== true) {
        echo '<script type="text/javascript">';
        echo 'alert("Form validation failed. Please check your inputs.");';
        echo 'window.location.href = "register.php";'; // Redirect using JavaScript
        echo '</script>';
        exit(); // Stop further PHP execution
    } else {
        include "insert.php";
        echo '<script type="text/javascript">';
        echo 'alert("New Record created succesfully");';
        echo 'window.location.href = "register.php";'; // Redirect using JavaScript
        echo '</script>';
        exit();
    }
}
?>

<?php
function validateName($name)
{
    $regex = '/^[a-zA-Z]+$/';
    if (preg_match($regex, $name)) {
        if ($name === strtoupper($name)) {
            return true; // Correct Form
        } else {
            echo '<script type="text/javascript">';
            echo 'alert("Name must be All Capital Letters");';
            echo '</script>';
        }
    } else {
            echo '<script type="text/javascript">';
            echo 'alert("Name must be all Alphabet");';
            echo '</script>';
    }
}

function validateIC($id)
{
    $regex = '/^\d{6}-\d{2}-\d{4}$/';
    if (preg_match($regex, $id)) {
        return true;
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Wrong Format");';
        echo '</script>';
    }
}

function validatePNumber($pNumber)
{
    $regex = '/^01\d{1}-\d{7,8}$/';
    if (preg_match($regex, $pNumber)) {
        return true;
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Wrong Format");';
        echo '</script>';
    }
}

function validateEmail($email)
{
    $validRegex = '/^[a-zA-Z0-9.!#$%&\'*+\/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/';
    if (preg_match($validRegex, $email)) {
        return true;
    } else {
        echo '<script type="text/javascript">';
        echo 'alert("Wrong Format");';
        echo '</script>';
    }
}

function validateDate($dateInput, $endDateInput)
{
    $selectedDate = strtotime($dateInput);
    $selectedDate2 = strtotime($endDateInput);
    $currentDate = time();

    $year = date('Y', $selectedDate);
    $month = date('n', $selectedDate);
    $day = date('j', $selectedDate);

    $year2 = date('Y', $selectedDate2);
    $month2 = date('n', $selectedDate2);
    $day2 = date('j', $selectedDate2);

    $currentYear = date('Y', $currentDate);
    $currentMonth = date('n', $currentDate);
    $currentDay = date('j', $currentDate);

    if ($year < $currentYear || ($year == $currentYear && $month < $currentMonth) || ($year == $currentYear && $month == $currentMonth && $day < $currentDay)) {
        echo '<script type="text/javascript">';
        echo 'alert("Date cannot be in the past");';
        echo '</script>';
        return false;
    }

    if ($year2 < $year || ($year2 == $year && $month2 < $month) || ($year2 == $year && $month2 == $month && $day2 < $day)) {
        echo '<script type="text/javascript">';
        echo 'alert("End date cannot be before start date");';
        echo '</script>';
        return false;
    }

    return true; // Validation passed
}
?>