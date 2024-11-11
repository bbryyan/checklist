<?php
include "db_conn.php";

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM student_info";
$result = mysqli_query($conn, $sql);
$student_info = mysqli_fetch_assoc($result);

$student_name = $student_info['student_name'];
$student_num = $student_info['student_num'];
$student_address = $student_info['student_address'];
$admission_date = $student_info['admission_date'];
$contact_num = $student_info['contact_num'];
$adviser_name = $student_info['adviser_name'];

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Checklist</title>
</head>
<body class="bg-secondary">
    <nav class="navbar navbar-light justify-content-center f2-3 mb-5" style="background-color: black">
        <h2 style="color: white">
            Checklist App
        </h2>
    </nav>
    <div class="d-flex flex-column justify-content-center align-items-center">
        <div class="d-flex justify-content-center flex-row gap-4" style="width: 100%;">
            <div class="d-flex flex-column gap-2">
                <div class="input-group mb-3">
                    <span class="input-group-text">Student Name:</span><br>
                    <input type="text" class="form-control" id="stdnt-name" name="stdnt-name" value="<?php echo $student_name;?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span  class="input-group-text">Student Number:</span><br>
                    <input type="number" class="form-control" id="stdnt-num" name="stdnt-num" value="<?php echo $student_num;?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Address:</span><br>
                    <input type="text" class="form-control" id="stdnt-address" name="stdnt-address" value="<?php echo $student_address;?>" readonly>
                </div>
            </div>
            <div class="d-flex flex-column gap-2">
                <div class="input-group mb-3">
                    <span class="input-group-text">Date of Admission:</span><br>
                    <input type="date" class="form-control" id="admit-date" name="admit-date" value="<?php echo $admission_date;?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text">Contact Number:</span><br>
                    <input type="text" class="form-control" id="contact-num" name="contact-num" value="<?php echo $contact_num;?>" readonly>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text"> Name of Adviser:</span><br>
                    <input type="text" class="form-control" id="advsr-name" name="advsr-name" value="<?php echo $adviser_name;?>" readonly>
                </div>
            </div>    
        </div>
        <br>
        <a href="/grades.php" class="text-decoration-none">
            <input type="submit" class="form-control" style="padding: 10px 30px;" value="See Student Grades">
        </a>
    </div>

    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>