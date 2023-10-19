<?php

//Make Connection with our server

$servername = "localhost";
$username = "";
$password = "";
$db = "search_info";

$conn = new mysqli($servername,$username,$password,$db);




if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql = "SELECT * FROM student_info WHERE stu_id = '$id'";
    $result = $conn->query($sql);

    if($result->num_rows > 0){
        $row = mysqli_fetch_assoc($result);
        $stu_firstname = $row["stu_firstname"];
        $stu_middlename = $row["stu_middlename"];
        $stu_lastname = $row["stu_lastname"];
        $stu_email = $row["stu_email"];
        $stu_age = $row["stu_age"];
        $stu_birthday = $row["stu_birthday"];
        $stu_emerg_phone = $row["stu_emerg_phone"];
        $stu_photo = $row["stu_photo"];
        $par_firstname = $row["par_firstname"];
        $par_lastname = $row["par_lastname"];
        $par_phone = $row["par_phone"];
        
    $student_info_array =  array($stu_photo,$stu_firstname,$stu_middlename,$stu_lastname,$stu_email,
    $stu_age,$stu_birthday,$stu_emerg_phone,$par_firstname,$par_lastname,$par_phone);

    $student_info_json = json_encode($student_info_array);
    echo $student_info_json;

    }

}


?>