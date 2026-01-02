<?php
$servername = "localhost";
$username = "root";
$password = "Police@4343";
$db_name = "feedback";

// Create connection
$conn = new mysqli($servername, $username,$password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$month="";
$day="";
$year="";
$first_name = mysqli_real_escape_string($conn, $_REQUEST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_REQUEST['last_name']);
$branch = mysqli_real_escape_string($conn, $_REQUEST['branch']);
$passing_year = mysqli_real_escape_string($conn, $_REQUEST['passing_year']);
$address_line_1 = mysqli_real_escape_string($conn, $_REQUEST['address_line_1']);
$address_line_2 = mysqli_real_escape_string($conn, $_REQUEST['address_line_2']);
$city = mysqli_real_escape_string($conn, $_REQUEST['city']);
$state = mysqli_real_escape_string($conn, $_REQUEST['state']);
$pin_code = mysqli_real_escape_string($conn, $_REQUEST['pin_code']);
//$month = mysqli_real_escape_string($conn, $_REQUEST['month']);
//$day = mysqli_real_escape_string($conn, $_REQUEST['day']);
//$year = mysqli_real_escape_string($conn, $_REQUEST['year']);
//$joining_date= $day."-"."-".$month."-".$year;
$joining_date = mysqli_real_escape_string($conn, $_REQUEST['joining_date']);
$emp_designation = mysqli_real_escape_string($conn, $_REQUEST['emp_designation']);
$email_id = mysqli_real_escape_string($conn, $_REQUEST['email_id']);
$anual_ctc = mysqli_real_escape_string($conn, $_REQUEST['anual_ctc']);
$mobile_number = mysqli_real_escape_string($conn, $_REQUEST['mobile_number']);
$landline_no = mysqli_real_escape_string($conn, $_REQUEST['landline_no']);

$q1 = mysqli_real_escape_string($conn, $_REQUEST['q1']);
$q2 = mysqli_real_escape_string($conn, $_REQUEST['q2']);
$q3 = mysqli_real_escape_string($conn, $_REQUEST['q3']);
$q4 = mysqli_real_escape_string($conn, $_REQUEST['q4']);
$q5 = mysqli_real_escape_string($conn, $_REQUEST['q5']);
$q6 = mysqli_real_escape_string($conn, $_REQUEST['q6']);
$q7 = mysqli_real_escape_string($conn, $_REQUEST['q7']);
$q8 = mysqli_real_escape_string($conn, $_REQUEST['q8']);
$q9 = mysqli_real_escape_string($conn, $_REQUEST['q9']);
$q10 = mysqli_real_escape_string($conn, $_REQUEST['q10']);
$suggestion = mysqli_real_escape_string($conn, $_REQUEST['suggestion']);

$sql = "INSERT INTO alumini_feedback (first_name, last_name, branch, passing_year,address_line_1,address_line_2, city,state,pin_code,joining_date,designation,email_id,ctc,mobile_no,phone_no,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,suggestions) VALUES ('$first_name', '$last_name', '$branch','$passing_year','$address_line_1','$address_line_2','$city','$state','$pin_code','$joining_date','$emp_designation','$email_id','$anual_ctc','$mobile_number','$landline_no','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$suggestion')";
if(mysqli_query($conn, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
 
$conn->close();
?>
