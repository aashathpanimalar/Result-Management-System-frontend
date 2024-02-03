<?php
$conn = new mysqli('localhost:3307', 'root', '', 'pec');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
@$registerNumber = $_POST["regno"];
@$dob = $_POST["dob"];
$sql = "SELECT * FROM student_details WHERE register_no = '$registerNumber' AND date_of_birth = '$dob'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "
    <a href='student.html' style='color:blue; font-size:20px;'>Back</a>
    <body>
    <fieldset>
    <mark>  <marquee id='marquee' direction='left' style='color:#B200ED'><b>PANIMALAR ENGINEERING COLLEGE,CHENNAI-600123 \ CONTROLLER OF EXAMINATION \ RESULT FOR NOVEMBER 2022 EXAMINATION</b></marquee></mark></p>
    <hr>
    <h1 align='center' style='color:#4c00b0';> <a> <img src='https://images.shiksha.com/mediadata/images/1601283419phpfyZRwV.png' width='80px' height='40px'></a>
    WELCOME TO PANIMALAR STUDENT PORTAL <a> <img src='https://panimalar.ac.in/assets/images/students.png' width='80px' height='40px'></a> </h1>
    <hr>
  
    <img src='https://panimalaradmission.com/assets/images/pec-logo.png' width='800px' height='130px' style=' margin-left:8%;'>
  
    <img src='https://panimalaradmission.com/assets/images/image-2.png' width='250px' height='130px' style='margin-left:0%;'> 
    <hr> ";

    while ($row = $result->fetch_assoc()) {
        echo "";
        echo "
            <table>
            <tr><td colspan='4'><h2 style='font-size:20px;text-align: left;'> Register Number: ". $row['register_no'] . "</h2></td></tr>
                <tr><td colspan='4'><h2 style='font-size:20px;text-align: left;'> Student Name: "." " .  $row['student_name'] . "</h2></td></tr>
                <tr><td colspan='4'><h2 style='font-size:20px;text-align: left;'> Branch: " . $row['department'] . "</h2></td></tr>
                <tr>
                    <th><b>SEM</b></th>
                    <th><b>SUBJECT-CODE</b></th>
                    <th><b>GRADE</b></th>
                    <th><b>RESULT</b></th>
                </tr>
                <tr>
                    <td>" . $row['fsem1'] . "</td>
                    <td>" . $row['fsubject1'] . "</td>
                    <td>" . $row['fgrade1'] . "</td>
                    <td>" . $row['fresult1'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem2'] . "</td>
                    <td>" . $row['fsubject2'] . "</td>
                    <td>" . $row['fgrade2'] . "</td>
                    <td>" . $row['fresult2'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem3'] . "</td>
                    <td>" . $row['fsubject3'] . "</td>
                    <td>" . $row['fgrade3'] . "</td>
                    <td>" . $row['fresult3'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem4'] . "</td>
                    <td>" . $row['fsubject4'] . "</td>
                    <td>" . $row['fgrade4'] . "</td>
                    <td>" . $row['fresult4'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem5'] . "</td>
                    <td>" . $row['fsubject5'] . "</td>
                    <td>" . $row['fgrade5'] . "</td>
                    <td>" . $row['fresult5'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem6'] . "</td>
                    <td>" . $row['fsubject6'] . "</td>
                    <td>" . $row['fgrade6'] . "</td>
                    <td>" . $row['fresult6'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem7'] . "</td>
                    <td>" . $row['fsubject7'] . "</td>
                    <td>" . $row['fgrade7'] . "</td>
                    <td>" . $row['fresult7'] . "</td>
                </tr>
                <tr>
                    <td>" . $row['fsem8'] . "</td>
                    <td>" . $row['fsubject8'] . "</td>
                    <td>" . $row['fgrade8'] . "</td>
                    <td>" . $row['fresult8'] . "</td>
                </tr>
                </table><hr>
                <h3 align='center' class='gpa'> GPA: " . $row['gpa']. "</h3>
           

            <hr>

            <center> <h3><div style='color:#008000;'><p style='color:red';>*</p>CS-Completed_sucessfully <p style='color:red';>*</p> RA-Absent <p style='color:red';>*</p> RA-Reappear</b></div></h3></center>
        <hr> 
      
         <h2><mark style='color:red';>Disclaimer:</mark><b></h2> <h3><p style='color:#800080';>
        The result published at coe.panimalar.ac.on is provisional only. We are not responsible for any inadvertent error
        that may have crept in the data/results being published on the Net. This is being published on the Net just for
        immediate information to the examinees. The Final Mark Sheets issued by the college should be treated 
        authentic & final in this regard. Result published by the College is valid subject to the approval of COE.
        </h3></b></p>
      <br>
         <hr>
        <center><button style='background-color:#008000; color:black; font-size:18px; padding:5px;'><b>Print</b></button></center>
       
        </fieldset>   ";

    }

} else {
    echo "<p>No data available</p>";
}

$conn->close();
?>
<html>

<head>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td,
        th {
            border: 1px solid #dddddd;
            text-align: center;
            padding: 8px;
            border-color: black;

        }

        p {
            display: inline;
            font-size: 18px;
            margin-left: 4%;
        }

        hr {
            border-color: black;
        }

        .gpa {
            border-color: black;
            border-style: solid;
            border-width: 3px;
            display: inline;
            margin-left: 45%;
            background-color: yellow;
            border-radius: 5px;
        }
    </style>
</head>

</html>