<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Opdracht 8</title>
</head>

<body>
    <a href="index.html">HOME</a>
    <h1>Opdracht 8 - Biggest Nerd Competition</h1>
    <p>ROC van Flevoland gaat de ‘biggest nerd-competition’ organiseren. Wie-o-wie is de slimste van de school? 10 weken lang worden er quizzes gehouden. Een quiz bestaat uit 50 vragen.
        Degene die de meeste vragen goed heeft beantwoord is de ‘ROCVF-nerd of the year’.
    </p>
    <p>Wat moet er gebeuren:
        jullie moeten een database ontwikkelen die gebruikt wordt bij de quiz-applicatie.
    </p>
    <p>Dit zijn de gegevens die moeten worden opgeslagen:
        er is behoefte aan een database ter ondersteuning van quizzen. De database zal zo’n 10.000 vragen omvatten. De vragen zijn verdeeld over een aantal categorieën. Typische categorieën zijn bijvoorbeeld sport, muziek, geografie en geschiedenis.
        Wekelijks kiest men 50 vragen uit de database voor elke quiz in de competitie. Een week later kiest men nogmaals 50 vragen uit de database, maar dat mogen niet dezelfde zijn.
        Van iedere quiz wordt een unieke code en de naam opgeslagen. Van iedere vraag wordt naast de tekst vastgelegd tot welke categorie deze behoort (elke categorie heeft een eigen ID). Van iedere gestelde vraag wordt vastgelegd op welk moment welke vraag door welke quiz is gesteld. Op deze wijze kun je nagaan of een vraag al binnen een quiz gesteld is.
    </p>
    <ul>
        <li>Maak het ERD voor de ‘biggest nerd competition’ (bijv. met MySQL Workbench).</li>
        <li>Maak het SQL-script voor de database en maak de database;</li>
        <li>Voeg minimaal 10 vragen toe aan de database.</li>
        <li>Maak de queries waarmee je 50 random vragen kunt opvragen voor de 1<sup>e</sup> quiz.</li>
        <li>Maak de queries waarmee je opnieuw 50 random vragen kunt oprvragen voor de 2<sup>e</sup> quiz, maar daar mogen geen vragen bij zijn die ook al in de eerste quiz zaten.
        </li>
    </ul>