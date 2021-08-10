<?php
    include('connection.php');
    $username = $_POST['user'];
    $password = $_POST['pass'];

        //to prevent from mysqli injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con, $username);
        $password = mysqli_real_escape_string($con, $password);

        $sql = "select RollNo, Password from users where RollNO = '$username' and Password = '$password'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);

        if($count == 1){
            include('studentpage.html');
        }
        else{
            echo '<script>alert("Invalid Username and password")</script>';
            include('student.html');
        }
?>
