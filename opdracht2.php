<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "dbchallenge";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT user_id, username, email FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "<table>
<tr>
<th>User Id</th>
<th>Username</th>
<th>Email</th>
</tr>";
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["user_id"] . "</td><td>" . $row["username"] . " </td><td>" . $row["email"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}
$conn->close();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 2</title>
</head>

<body>
<a href="index.html">HOME</a>
<h1>Opdracht 2</h1>
<p>Schrijf een script waarmee de gegevens van alle users netjes in een tabel komen te staan. <span>Let op: zet het wachtwoord niet in de tabel.</span>
    Klik <a href="voorbeeld2.html">hier</a> om het voorbeeld te zien.</p>
<p><? echo $row ?> </p>
</body>

</html>