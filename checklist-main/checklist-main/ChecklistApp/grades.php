<?php
include "db_conn.php";

session_start();

if (isset($_SESSION['tablename'])) {
    $table_name = $_SESSION['tablename'];
} else {
    $table_name = "yr1_sem1";
}

session_destroy();

$conn = mysqli_connect($servername, $username, $password, $dbname);

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
    

    <title>Student Grades</title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center f2-3 mb-5" style="background-color: black">
        <h2 style="color: white">
            Checklist App
        </h2>
    </nav>
    <form action="handle_page.php" method="post">
        <div class="d-flex flex-column justify-content-center align-items-center">
            <div class="d-flex flex-column justify-content-center align-items-center col-md-10">
            <div class="input-group mb-3">
                <button class="btn btn-outline-secondary dropdown-toggle" id="year-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">Year</button>
                <input type="hidden" name="year" id="year">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="changeYear('1st Year')">1st Year</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeYear('2nd Year')">2nd Year</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeYear('3rd Year')">3rd Year</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeYear('4th Year')">4th Year</a></li>
                </ul>
                <button class="btn btn-outline-secondary dropdown-toggle" id="sem-dropdown" type="button" data-bs-toggle="dropdown" aria-expanded="false">Semester</button>
                <input type="hidden" name="sem" id="sem">
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="#" onclick="changeSem('1st Sem')">1st Sem</a></li>
                    <li><a class="dropdown-item" href="#" onclick="changeSem('2nd Sem')">2nd Sem</a></li>
                </ul>
                <button class="btn btn-outline-secondary" type="submit" id="button-addon1">See Grades</button>
            </div>
                <table class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Title</th>
                            <th scope="col">Credit Unit Lec</th>
                            <th scope="col">Credit Unit Lab</th>
                            <th scope="col">Contact Hrs Lec</th>
                            <th scope="col">Contact Hrs Lab</th>
                            <th scope="col">Pre-requisite</th>
                            <th scope="col">Sem / Yr taken</th>
                            <th scope="col">Final Grade</th>
                            <th scope="col">Instructor</th>
                        </tr>
                    </thead>
                    <tbody class="table-group-divider">
                        <?php
                        $conn = mysqli_connect($servername, $username, $password, $dbname);

                        $sql = "SELECT * FROM $table_name";
                        $result = mysqli_query($conn, $sql);

                        while ($row = mysqli_fetch_assoc($result)) {
                            echo "<tr>";
                            echo "<td>" . $row['course_code'] . "</td>";
                            echo "<td>" . $row['course_title'] . "</td>";
                            echo "<td>" . $row['credit_unit_lec'] . "</td>";
                            echo "<td>" . $row['credit_unit_lab'] . "</td>";
                            echo "<td>" . $row['contact_hrs_lec'] . "</td>";
                            echo "<td>" . $row['contact_hrs_lab'] . "</td>";
                            echo "<td>" . $row['pre_requisite'] . "</td>";

                            if (!$row['final_grade']) {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' placeholder='Sem / Yr Taken'> </td>";
                            } else {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' value='" . $row['sem_yr_taken'] ."'> </td>";
                            }

                            if (!$row['final_grade']) {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' placeholder='Final Grade'> </td>";
                            } else {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' value='" . $row['final_grade'] ."'> </td>";
                            }

                            if (!$row['final_grade']) {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' placeholder='Instructor'> </td>";
                            } else {
                                echo "<td>" . "<input type='text' class='form-control aria-label='Text input with dropdown button' value='" . $row['instructor_name'] ."'> </td>";
                            }
                            
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </form>
    </div>

    <script>
        function changeYear(year) {
            document.getElementById('year-dropdown').innerText = year;
            document.getElementById('year').value = year;
        }

        function changeSem(sem) {
            document.getElementById('sem-dropdown').innerText = sem;
            document.getElementById('sem').value = sem;
        }
    </script>
    
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>