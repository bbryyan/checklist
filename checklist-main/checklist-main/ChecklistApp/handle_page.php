<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $year = $_POST["year"];
    $sem = $_POST["sem"];

    if ($year == "1st Year" && $sem == "1st Sem") {
        $tablename = "yr1_sem1";
    } elseif ($year == "1st Year" && $sem == "2nd Sem") {
        $tablename = "yr1_sem2";
    } elseif ($year == "2nd Year" && $sem == "1st Sem") {
        $tablename = "yr2_sem1";
    } elseif ($year == "2nd Year" && $sem == "2nd Sem") {
        $tablename = "yr2_sem2";
    } elseif ($year == "3rd Year" && $sem == "1st Sem") {
        $tablename = "yr3_sem1";
    } elseif ($year == "3rd Year" && $sem == "2nd Sem") {
        $tablename = "yr3_sem2";
    } elseif ($year == "4th Year" && $sem == "1st Sem") {
        $tablename = "yr4_sem1";
    } elseif ($year == "4th Year" && $sem == "2nd Sem") {
        $tablename = "yr4_sem2";
    }

    session_start();

    $_SESSION['tablename'] = $tablename;

    header("Location: grades.php");
    exit; 
} else {
    $tablename = null;
}
?>