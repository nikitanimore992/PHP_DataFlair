<html>
<head>
    <title>Delete Record</title>
</head>
<body>
<center>
<?php
session_start();

if (isset($_SESSION['sid'])) {
    $stuid = $_SESSION['sid'];
    $mycon = mysqli_connect("localhost", "root", "", "mynewdatabase");

    if (!$mycon) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "DELETE FROM student WHERE sid = ?";
    $stmt = $mycon->prepare($sql);
    $stmt->bind_param("i", $stuid);

    if ($stmt->execute()) {
        echo "<h3>Record deleted successfully for Student ID: $stuid</h3>";
    } else {
        echo "<h3>Error deleting record: " . $stmt->error . "</h3>";
    }

    $stmt->close();
    $mycon->close();

    // clear session
    session_destroy();
} else {
    echo "<h3>No student selected for deletion.</h3>";
}
?>
</center>
</body>
</html>
