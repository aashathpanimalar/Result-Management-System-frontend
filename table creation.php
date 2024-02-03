<?php

$servername = "localhost:3307";
$username = "root";
$password = "";
$dbname = "pec";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Error in connection: " . mysqli_error());
}

$sql2 = "CREATE TABLE student_details (
    student_name VARCHAR(20) NOT NULL,
    register_no VARCHAR(20) PRIMARY KEY,
    date_of_birth VARCHAR(12) NOT NULL,
    department VARCHAR(30),
    fsem1 VARCHAR(2) NOT NULL, fsubject1 VARCHAR(15) NOT NULL, fgrade1 VARCHAR(2) NOT NULL, fresult1 VARCHAR(6) NOT NULL,
    fsem2 VARCHAR(2) NOT NULL, fsubject2 VARCHAR(15) NOT NULL, fgrade2 VARCHAR(2) NOT NULL, fresult2 VARCHAR(6) NOT NULL,
    fsem3 VARCHAR(2) NOT NULL, fsubject3 VARCHAR(15) NOT NULL, fgrade3 VARCHAR(2) NOT NULL, fresult3 VARCHAR(6) NOT NULL,
    fsem4 VARCHAR(2) NOT NULL, fsubject4 VARCHAR(15) NOT NULL, fgrade4 VARCHAR(2) NOT NULL, fresult4 VARCHAR(6) NOT NULL,
    fsem5 VARCHAR(2) NOT NULL, fsubject5 VARCHAR(15) NOT NULL, fgrade5 VARCHAR(2) NOT NULL, fresult5 VARCHAR(6) NOT NULL,
    fsem6 VARCHAR(2) NOT NULL, fsubject6 VARCHAR(15) NOT NULL, fgrade6 VARCHAR(2) NOT NULL, fresult6 VARCHAR(6) NOT NULL,
    fsem7 VARCHAR(2) NOT NULL, fsubject7 VARCHAR(15) NOT NULL, fgrade7 VARCHAR(2) NOT NULL, fresult7 VARCHAR(6) NOT NULL,
    fsem8 VARCHAR(2) NOT NULL, fsubject8 VARCHAR(15) NOT NULL, fgrade8 VARCHAR(2) NOT NULL, fresult8 VARCHAR(6) NOT NULL,
    gpa VARCHAR(10) NOT NULL
)";


if ($conn->query($sql2) === true) {
    echo "Table created successfully";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>