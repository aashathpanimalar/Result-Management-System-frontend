<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$dbname = "pec";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
@$name =ucwords($_POST["sname"]);
@$regno = strtoupper($_POST["reg"]);
@$dob = strtoupper($_POST["dob"]);
@$dep = ucwords($_POST["dep"]);


@$fsem1 = strtoupper($_POST["fsem1"]);
@$fsem2 = strtoupper($_POST["fsem2"]);
@$fsem3 = strtoupper($_POST["fsem3"]);
@$fsem4 = strtoupper($_POST["fsem4"]);
@$fsem5 = strtoupper($_POST["fsem5"]);
@$fsem6 = strtoupper($_POST["fsem6"]);
@$fsem7 = strtoupper($_POST["fsem7"]);
@$fsem8 = strtoupper($_POST["fsem8"]);

@$fsubject1 = $_POST["fsubject1"];
@$fsubject2 = $_POST["fsubject2"];
@$fsubject3 = $_POST["fsubject3"];
@$fsubject4 = $_POST["fsubject4"];
@$fsubject5 = $_POST["fsubject5"];
@$fsubject6 = $_POST["fsubject6"];
@$fsubject7 = $_POST["fsubject7"];
@$fsubject8 = $_POST["fsubject8"];

@$fgrade1 = strtoupper($_POST["fgrade1"]);
@$fgrade2 = strtoupper($_POST["fgrade2"]);
@$fgrade3 = strtoupper($_POST["fgrade3"]);
@$fgrade4 = strtoupper($_POST["fgrade4"]);
@$fgrade5 = strtoupper($_POST["fgrade5"]);
@$fgrade6 = strtoupper($_POST["fgrade6"]);
@$fgrade7 = strtoupper($_POST["fgrade7"]);
@$fgrade8 = strtoupper($_POST["fgrade8"]);

@$fresult1 = strtoupper($_POST["fresult1"]);
@$fresult2 = strtoupper($_POST["fresult2"]);
@$fresult3 = strtoupper($_POST["fresult3"]);
@$fresult4 = strtoupper($_POST["fresult4"]);
@$fresult5 = strtoupper($_POST["fresult5"]);
@$fresult6 = strtoupper($_POST["fresult6"]);
@$fresult7 = strtoupper($_POST["fresult7"]);
@$fresult8 = strtoupper($_POST["fresult8"]);

@$gpa = strtoupper($_POST["gpa"]);

$sql = "INSERT INTO student_details (student_name, register_no, date_of_birth, department,fsem1,fsubject1,fgrade1,fresult1,
fsem2,fsubject2,fgrade2,fresult2,
fsem3,fsubject3,fgrade3,fresult3,
fsem4,fsubject4,fgrade4,fresult4,
fsem5,fsubject5,fgrade5,fresult5,
fsem6,fsubject6,fgrade6,fresult6,
fsem7,fsubject7,fgrade7,fresult7,
fsem8,fsubject8,fgrade8,fresult8,gpa) VALUES ('$name', '$regno','$dob','$dep','$fsem1','$fsubject1','$fgrade1','$fresult1',
'$fsem2','$fsubject2','$fgrade2','$fresult2',
'$fsem3','$fsubject3','$fgrade3','$fresult3',
'$fsem4','$fsubject4','$fgrade4','$fresult4',
'$fsem5','$fsubject5','$fgrade5','$fresult5',
'$fsem6','$fsubject6','$fgrade6','$fresult6',
'$fsem7','$fsubject7','$fgrade7','$fresult7',
'$fsem8','$fsubject8','$fgrade8','$fresult8','$gpa')";

if ($conn->query($sql) === TRUE) {
    echo "Result Uploaded Successfully!!";
    echo"<br><a href='admin2.html'>Upload Another result</a>";
    echo"<br><a href='index.php'>Go Back</a>";
} else {
    die("Error: " . $conn->error);
}


mysqli_close($conn);
?>