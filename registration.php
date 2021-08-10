<?php
$rollno = $_POST['rollno'];
$branch = $_POST['branch'];
$password = $_POST['password'];
$name = $_POST['name'];
$passout = $_POST['passout_year'];
$hackr = $_POST['HackerRank_Username'];
$hackrs = $_POST['HackerRank_score'];
$codec = $_POST['CodeChef_Username'];
$codecs = $_POST['CodeChef_Score'];
$codef = $_POST['Codeforces_Username'];
$codefs = $_POST['CodeForces_Score'];
$hacke = $_POST['HackerEarth_Username'];
$hackes = $_POST['HackerEarth_Score'];

$conn = new mysqli("localhost", "root", "", "admin_user");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `users` (`RollNo`, `Password`, `Name`, `Branch`, `Passout_Year`, `CodeChef_Username`, `CodeChef_Score`, `HackerRank_Username`, `HackerRank_Score`, `CodeForces_Username`, `CodeForces_Score`, `HackerEarth_Username`, `HackerEarth_Score`)
VALUES ('$rollno', '$password', '$name', '$branch', '$passout', '$codec', '$codecs', '$hackr', '$hackrs', '$codef', '$codefs', '$hacke', 'hackes');
";

if ($conn->query($sql) === TRUE) {
echo '<script>alert("New Record Added")</script>';
  include('student.html');
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
 ?>
