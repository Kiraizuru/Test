<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "415263Darw";
$database = "Test";
// Create connection
$conn = new mysqli($servername, $username, $password, );
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("$servername", "$username", "$password", "$database");
$mysqli->query("DROP TABLE IF EXISTS test");
$mysqli->query("CREATE TABLE test(id INT, label CHAR(1))");
$mysqli->query("INSERT INTO test(id, label) VALUES (1, 'a')");
;
$result = $mysqli->query("SELECT id, label FROM test WHERE id = 1");
$row = $result->fetch_assoc();
printf("id = %s (%s)\n", $row['id'], gettype($row['id']));
printf("label = %s (%s)\n", $row['label'], gettype($row['label']));
// Check
if ($conn->connect_error) {
    die("" . $conn->connect_error);
    echo ("Yes");
} else
    echo ("CONNECTION Ok");
?>
</body>
</html>