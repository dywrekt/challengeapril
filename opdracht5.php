<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 5</title>
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 5</h1>
    <p>Deze opdracht is het vervolg op opdracht 4. Als opdracht 4 gelukt is, kun je dus gebruik maken van de code die je daar had, maar we gaan er iets aan toevoegen. Namelijk: we willen in het selectiemenu een specifieke gebruiker kunnen selecteren.</p>
    <p>Zorg er voor dat het selectiemenu de user_id's van alle personen in je database toont, zonder de EDIT functionaliteit te verliezen.</p>
    <h2>Wijzig hier de gegevens van een specifieke gebruiker:</h2>
    <form action="opdracht5.php" method="post">
    <label>User id:
            <select id="select_user" name="user_id">
                <?php idOptions(); ?>
            </select>
        </label><br>
        <label>Gebruikersnaam: <input name="username"></label><br>
        <label>E-mail: <input type="email" name="email"></label><br>
        <label>Wachtwoord: <input type="password" name="password"></label><br>
        <input type="submit" name="submit"><br>
    </form>
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

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $id = $_POST['user_id'];


    $sql = "UPDATE users SET username='$username', email='$email', password='$password' WHERE user_id='$id'";
    if (mysqli_query($conn, $sql)) {
        echo "User changed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

function idOptions()
{
    $dbc = mysqli_connect('localhost', 'root', 'root', 'dbchallenge') or die('Error connecting.');
    $query = "SELECT user_id FROM users";
    $result = mysqli_query($dbc, $query);
    $data = mysqli_fetch_all($result);
    echo "<option value=''></option>";
    foreach ($data as $values) {
        foreach ($values as $value) {
            echo "<option value='" . $value . "'>" . $value . "</option>";
        }
    }
    mysqli_close($dbc);
}

    $conn->close();
    ?>
</body>