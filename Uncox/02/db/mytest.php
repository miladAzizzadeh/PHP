<!doctype html>
<html lang="fa">
<head>
    <meta charset="utf-8">
    <title>دیتابیس</title>
</head>
<body>
<?php
/*function connectToDb($servername = "localhost",$username = "root",$password = "",$dbname){ // عملا با نوشتن فانکشن هیچ کار مفیدی انجام ندادم و در واقع ی واسطه ی غیر مفید هست
    return mysqli_connect($servername,$username,$password,$dbname);
}*/

// Example (MySQLi Procedural)

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "Connection failed: " . mysqli_connect_error();
    exit;
}
mysqli_query($conn,"SET NAMES 'utf8'");
$sql = "SELECT * FROM x_note";
$result = mysqli_query($conn, $sql);
//var_dump($result);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
//        var_dump($row);
        echo "note_id: " . $row["note_id"] . " user_id: " . $row["user_id"] . " title: " . $row["title"] . " description: " . $row["description"] . " eventTime: " . $row["eventTime"]."<br>";
    }
} else {
    echo "اطلاعاتی وجود نداشت";
}

mysqli_close($conn);




// Example (MySQLi Object-oriented)
/*$servername = "localhost";
$username = "root";
$password = "";
$dbname = "notes";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    echo "Connection failed: " . $conn->connect_error;
    exit;
}

$sql = "SELECT * FROM x_note";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "note_id: " . $row["note_id"] . " user_id: " . $row["user_id"] . " title: " . $row["title"] . " description: " . $row["description"] . " eventTime: " . $row["eventTime"]."<br>";
    }
} else {
    echo "اطلاعاتی وجود نداشت";
}
$conn->close();*/

?>
</body>
</html>