<?php
    $count = $_POST["i"];
    $text = "";
    $myfile = fopen("grade.text", "w") or die("Unable to open file!");
    $totalcredit = $_POST["totalcredit"];
    $totalgrade = $_POST["totalgrade"];
    

    for($i = 0; $i < $count; $i++){
        $course_id = $_POST["course"][$i];
        $course_name = $_POST["name"][$i];
        $credit = $_POST["credit"][$i];
        $grade = $_POST["grade"][$i];
        $order = $i+1;
        $listSubject = "--------- Subject ".$order."---------";
        $text .= $listSubject."\r\nCourse ID: ".$course_id."\r\nCourse Name: ".$course_name."\r\nCredit: ".$credit."\r\nGrade: ".$grade."\r\n";
    }
    fwrite($myfile, "Grade Result\r\n");
    fwrite($myfile, $text);
    fwrite($myfile, "\r\nTotal Credit: ".$totalcredit."\r\n");
    fwrite($myfile, "GPA: ".$totalgrade);
    fclose($myfile);
    header('Location: index.php');
?>