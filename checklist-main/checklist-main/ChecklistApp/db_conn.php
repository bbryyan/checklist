<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "checklist";

$conn = mysqli_connect($servername, $username, $password);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SHOW DATABASES");

$database_exists = false;
if($result) {
    while ($row = mysqli_fetch_assoc($result)){
        if ($row['Database'] == $dbname) {
            $database_exists = true;
            break;
        }
    }
}

if (!$database_exists) {
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    mysqli_query($conn, $sql);

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "CREATE TABLE IF NOT EXISTS student_info(
        student_name varchar(50),
        student_num int(20),
        student_address varchar(100),
        admission_date date,
        contact_num varchar(20),
        adviser_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO student_info VALUES (
        'Cheiron S. Candelaria',
        202211703,
        'T.S. Cruz Almanza Dos, Las Piñas City',
        '22/08/22',
        '09319819980',
        null
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr1_sem1(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr1_sem2(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr2_sem1(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr2_sem2(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr3_sem1(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr3_sem2(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr4_sem1(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "CREATE TABLE IF NOT EXISTS yr4_sem2(
        course_code varchar(10),
        course_title varchar(60),
        credit_unit_lec int(1),
        credit_unit_lab int(1),
        contact_hrs_lec  int(1),
        contact_hrs_lab int(1),
        pre_requisite varchar(50),
        sem_yr_taken varchar(20),
        final_grade varchar(5),
        instructor_name varchar(50)
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr1_sem1 VALUES (
        'GNED 02',
        'Ethics',
        3,
        null,
        3,
        null,
        null,
        '1st Sem',
        '2.25',
        'MR. ABEJUELA'
    ),(
        'GNED 05',
        'Purposive Communication',
        3,
        null,
        3,
        null,
        null,
        '1st Sem',
        '1.75',
        'MS. PICA'
    ),(
        'GNED 11',
        'Kontekstwalisadong Komunikasyon sa Filipino',
        3,
        null,
        3,
        null,
        null,
        '1st Sem',
        '1.00',
        'MR. CASTILLO'
    ),(
        'COSC 50',
        'Discrete Structures 1',
        3,
        null,
        3,
        null,
        null,
        '1st Sem',
        '1.00',
        'MR. SANTOS'
    ),(
        'DCIT 21',
        'Introduction to Computing',
        2,
        1,
        2,
        3,
        null,
        '1st Sem',
        '2.25',
        'MS. RAMALLOSA'
    ),(
        'DCIT 22',
        'Computer Programming 1',
        1,
        2,
        1,
        6,
        null,
        '1st Sem',
        '1.00',
        'MR. MITRA'
    ),(
        'FITT 1',
        'Movement Enhancement',
        2,
        null,
        2,
        null,
        null,
        '1st Sem',
        '1.75',
        'MS. MENDOZA'
    ),(
        'NSTP 1',
        'National Service Training Program 1',
        3,
        null,
        3,
        null,
        null,
        '1st Sem',
        '1.25',
        'MR. MITRA'
    ),(
        'CvSU 101',
        'Institutional Orientation',
        1,
        null,
        1,
        null,
        null,
        '1st Sem',
        'S',
        'MR. VELUZ'
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr1_sem2 VALUES (
        'GNED 01',
        'Art Appreciation',
        3,
        null,
        3,
        null,
        null,
        '1st Yr',
        '1.25',
        'MR. LOZADA'
    ),(
        'GNED 03',
        'Mathematics in the Modern World',
        3,
        null,
        3,
        null,
        null,
        '2nd Yr',
        '1.25',
        'MR. MANOZO'
    ),(
        'GNED 06',
        'Science, Technology and Society',
        3,
        null,
        3,
        null,
        null,
        '1st Yr',
        '1.75',
        'MR. MONTEJAR'
    ),(
        'GNED 12',
        'Alamat Ng/Sa Filipino',
        3,
        null,
        3,
        null,
        'GNED 11',
        '1st Yr',
        '2.00',
        'MS. DELA CRUZ'
    ),(
        'DCIT 23',
        'Computer Programming 2',
        1,
        2,
        1,
        6,
        'DCIT 22',
        '1st Yr',
        '1.50',
        'MR. ELLO'
    ),(
        'ITEC 50',
        'Web Systems and Technologies',
        2,
        1,
        2,
        3,
        'DCIT 21',
        '1st Yr',
        '2.00',
        'MR. GIANAN'
    ),(
        'FITT 2',
        'Fitness Exercises',
        2,
        null,
        2,
        null,
        'FITT 1',
        '1st Yr',
        '1.75',
        'MS. MENDOZA'
    ),(
        'NSTP 2',
        'National Service Training Program 2',
        3,
        null,
        3,
        null,
        'NSTP 1',
        '1st Yr',
        '1.75',
        'MS. BATO'
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr2_sem1 VALUES (
        'GNED 04',
        'Mga Babasahin Hinggil sa Kasaysayan ng Pilipinas',
        3,
        null,
        3,
        null,
        null,
        '2nd Yr',
        '1.50',
        'MS. SAMBRANO'
    ),(
        'MATH 1',
        'Analytic Geometry',
        3,
        null,
        3,
        null,
        'GNED 03',
        '2nd Yr',
        '1.75',
        'MR. ONGAYO'
    ),(
        'COSC 55',
        'Discrete Structures 2',
        3,
        null,
        3,
        null,
        'COSC 50',
        '2nd Yr',
        '2.25',
        'MS. PENSON'
    ),(
        'COSC 60',
        'Digital Logic Design',
        2,
        1,
        2,
        3,
        'COSC 50, DCIT 23',
        '2nd Yr',
        '1.25',
        'MR. NATI'
    ),(
        'DCIT 50',
        'Object Oriented Programming',
        2,
        1,
        2,
        3,
        'DCIT 23',
        '2nd Yr',
        '1.50',
        'MR. BELGICA'
    ),(
        'DCIT 24',
        'Information Management',
        2,
        1,
        2,
        3,
        'DCIT 23',
        '2nd Yr',
        '2.25',
        'MR. DECIPULO'
    ),(
        'INSY 50',
        'Fundamentals of Information Systems',
        3,
        null,
        3,
        null,
        'DCIT 21',
        '2nd Yr',
        '1.50',
        'MR. ROSETE'
    ),(
        'FITT 3',
        'Physical Activities towards Health and Fitness 1',
        2,
        null,
        2,
        null,
        'FITT 1',
        '2nd Yr',
        '1.25',
        'MR. JAMITO'
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr2_sem2 VALUES (
        'GNED 08',
        'Understanding the Self',
        3,
        null,
        3,
        null,
        null,
        null,
        null,
        null
    ),(
        'GNED 14',
        'Panitikang Panlipunan',
        3,
        null,
        3,
        null,
        null,
        null,
        null,
        null
    ),(
        'MATH 2',
        'Calculus',
        3,
        null,
        3,
        null,
        'MATH 01',
        null,
        null,
        null
    ),(
        'COSC 65',
        'Architecture and Organization',
        2,
        1,
        2,
        3,
        'COSC 60',
        null,
        null,
        null
    ),(
        'COSC 70',
        'Software Engineering 1',
        3,
        null,
        3,
        null,
        'DCIT 50, DCIT 24',
        null,
        null,
        null
    ),(
        'DCIT 25',
        'Data Structures and Algorithms',
        2,
        1,
        2,
        3,
        'DCIT 23',
        null,
        null,
        null
    ),(
        'DCIT 55',
        'Advanced Database Management System',
        2,
        1,
        2,
        3,
        'DCIT 24',
        null,
        null,
        null
    ),(
        'FITT 4',
        'Physical Activities towards Health and Fitness 2',
        2,
        null,
        2,
        null,
        'FITT 1',
        null,
        null,
        null
    )";
    mysqli_query($conn, $sql);
    $result = mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr3_sem1 VALUES (
        'MATH 3',
        'Linear Algebra',
        3,
        null,
        3,
        null,
        'MATH 2',
        null,
        null,
        null
    ),(
        'COSC 75',
        'Software Engineering 2',
        2,
        1,
        2,
        3,
        'COSC 70',
        null,
        null,
        null
    ),(
        'COSC 80',
        'Operating Systems',
        2,
        1,
        2,
        3,
        'DCIT 25',
        null,
        null,
        null
    ),(
        'COSC 85',
        'Networks and Communication',
        2,
        1,
        2,
        3,
        'ITEC 50',
        null,
        null,
        null
    ),(
        'COSC 101',
        'CS Elective 1 (Computer Graphics and Visual Computing)',
        2,
        1,
        2,
        3,
        'DCIT 23',
        null,
        null,
        null
    ),(
        'DCIT 26',
        'Applications Develompent And Emerging Technologies',
        2,
        1,
        2,
        3,
        'ITEC 50',
        null,
        null,
        null
    ),(
        'DCIT 65',
        'Social and Professional Issues',
        3,
        null,
        3,
        null,
        null,
        null,
        null,
        null
    )";
    mysqli_query($conn, $sql);
    
    $sql = "INSERT INTO yr3_sem2 VALUES (
        'GNED 09',
        'Life and Works of Rizal',
        3,
        null,
        3,
        null,
        'GNED 04',
        null,
        null,
        null
    ),(
        'MATH 4',
        'Experimental Statistics',
        2,
        1,
        2,
        3,
        'MATH 2',
        null,
        null,
        null
    ),(
        'COSC 90',
        'Design and Analysis of Algorithm',
        3,
        null,
        3,
        null,
        'DCIT 25',
        null,
        null,
        null
    ),(
        'COSC 95',
        'Programming Languages',
        3,
        null,
        3,
        null,
        'DCIT 25',
        null,
        null,
        null
    ),(
        'COSC 106',
        'CS Elective 2 (Introduction to Game Development)',
        2,
        1,
        2,
        3,
        'MATH 3, COSC 101',
        null,
        null,
        null
    ),(
        'DCIT 60',
        'Methods of Research',
        3,
        null,
        3,
        null,
        '3rd Yr Standing',
        null,
        null,
        null
    ),(
        'ITEC 85',
        'Information Assurance and Security',
        3,
        null,
        3,
        null,
        'DCIT 24',
        null,
        null,
        null
    ),(
        'COSC 199',
        'Practicum (240 hours)',
        3,
        null,
        3,
        null,
        'Incoming 4th Yr',
        null,
        null,
        null
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr4_sem1 VALUES (
        'ITEC 80',
        'Human Computer Interaction',
        1,
        null,
        3,
        null,
        'ITEC 85',
        null,
        null,
        null
    ),(
        'COSC 100',
        'Automata Theory and Formal Languages',
        3,
        null,
        3,
        null,
        'COSC 90',
        null,
        null,
        null
    ),(
        'COSC 105',
        'Intelligent Systems',
        2,
        1,
        2,
        3,
        'MATH 4, COSC 55, DCIT 50',
        null,
        null,
        null
    ),(
        'COSC 111',
        'CS Elective 3 (Internet of Things)',
        2,
        1,
        2,
        3,
        'COSC 60',
        null,
        null,
        null
    ),(
        'COSC 200A',
        'Undergraduate Thesis',
        3,
        null,
        1,
        null,
        '4th Yr Standing',
        null,
        null,
        null
    )";
    mysqli_query($conn, $sql);

    $sql = "INSERT INTO yr4_sem2 VALUES (
        'GNED 07',
        'The Contemporary World',
        3,
        null,
        3,
        null,
        null,
        null,
        null,
        null
    ),(
        'GNED 10',
        'Gender and Society',
        3,
        null,
        3,
        null,
        null,
        null,
        null,
        null
    ),(
        'COSC 110',
        'Numerical and Symbolic Computation',
        2,
        1,
        2,
        3,
        'COSC 60',
        null,
        null,
        null
    ),(
        'COSC 200B',
        'Undergraduate Thesis II',
        3,
        null,
        1,
        null,
        'COSC 200A',
        null,
        null,
        null
    )";
    mysqli_query($conn, $sql);
}

mysqli_close($conn);
?>