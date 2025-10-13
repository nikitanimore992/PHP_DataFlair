<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Student Data</title>
</head>
<body>
<center>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stuid = $_POST['txtid'];

    // Connect to DB
    $mycon = mysqli_connect("localhost", "root", "", "mynewdatabase");
    if (!$mycon) {
        die("Database connection failed: " . mysqli_connect_error());
    }

    // Fetch record
    $sql = "SELECT * FROM student WHERE sid = ?";
    $stmt = $mycon->prepare($sql);
    $stmt->bind_param("i", $stuid);
    $stmt->execute();
    $record = $stmt->get_result();

    if ($record->num_rows > 0) {
        session_start();
        $_SESSION['sid'] = $stuid;

        echo "<h2>Student Record</h2>";
        echo "<table border='1' cellpadding='5'>";
        echo "<tr><th>ID</th><th>Name</th><th>Math</th><th>Chemistry</th><th>Physics</th><th>Action</th></tr>";

        while ($row = $record->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['sid']."</td>";
            echo "<td>".$row['sname']."</td>";
            echo "<td>".$row['math']."</td>";
            echo "<td>".$row['chemestry']."</td>";
            echo "<td>".$row['physics']."</td>";
            echo "<td>
                    <form method='post' action='Deletedata.php'>
                        <input type='submit' name='deletebtn' value='Delete'>
                    </form>
                  </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "<h3>No record found with ID: $stuid</h3>";
    }

    $stmt->close();
    $mycon->close();
}
?>
</center>
</body>
</html>
