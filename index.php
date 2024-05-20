<?php require_once "functions.php"; ?>
<DOCTYPE html>
    <html>
        <head>
            <title>Opdracht3 include</title>
            <link rel="stylesheet" href="style.css">
        </head>
        <body>
            <?php require_once "header.php";?>
            <article>
                <p>
                    <?php 
                    echo calculateAge("2003-04-24"); ?>
                </p>
                <p>
                    <?php   echo luckyNumber();//Maak hier gebruik van je zelfgemaakte functie. ?>
                </p>
            </article>
            <?php require_once "footer.php"; ?>
        </body>
    </html>