<?php
include "dbcon.php";

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

    $sql = "INSERT INTO visitor (name, gender, phone_no, ic_no, email, date_visit, end_date, purpose, visitor_company, department) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    
    if ($stmt) {
        $stmt->bind_param("ssssssssss", $name, $gender, $phone_no, $ic_no, $email, $start_date, $end_date, $purpose, $visitor_com, $department);
        
        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }
        
        $stmt->close();
    } else {
        echo "Error in preparing statement: " . $conn->error;
    }
}
