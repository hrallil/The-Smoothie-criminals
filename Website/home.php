<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <title> The smoothie criminals' Very cool website</title>
    </head>
    <body>
        <div class="grid text-center">
            <div>
                <h1>SUPER COOL DRINKS</h1>
            </div>
            <a class="btn btn-primary" href="drinkMenu.php" role="button">Drink selection</a>
            <a class="btn btn-primary" href="tasteMenu.php" role="button">Taste selection</a>
            <a class="btn btn-primary" href="randomDrink.php" role="button">Random DRINK!</a>
        </div>

        <?php ECHO "ABE"; ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>