<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 6</title>
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 6</h1>
    <p>Laatste uitbreiding op opdracht 4 en 5 (voor gevorderden): zorg nu dat het selecteren van een user ervoor zorgt dat de inputvelden automatisch worden gevuld met de reeds bestaande data, zodat we weten wat we aanpassen voordat we op submit klikken. Uiteraard, wederom, zonder de EDIT functionaliteit te verliezen.</p>
    <div id="demo"></div>
    <h2>Wijzig hier de gegevens van een specifieke gebruiker:</h2>
    <form action="opdracht6.php" method="post">
    <label>User id:
            <select id="select_user" name="user_id" onchange="getUserData()">
            <!-- SCHRIJF HIER JE CODE -->
            </select>
        </label><br>
        <label>Gebruikersnaam: <input name="username" id="username"></label><br>
        <label>E-mail: <input type="email" name="email" id="email"></label><br>
        <label>Wachtwoord: <input type="password" name="password" id="password"></label><br>
        <input type="submit" name="submit"><br>
    </form>
    <!-- SCHRIJF HIER JE CODE -->
</body>