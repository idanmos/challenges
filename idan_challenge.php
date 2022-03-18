<?php
    if (isset($_GET["flag"])) {
        $flag = $_GET["flag"].".png";
    } else {
        $flag = "";
    }
?>

<!doctype html>
<html dir="ltr" lang="en">
    <head>
        <title>Idan's Challenge</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    </head>
    <body style="background-color: #ecedf0; width: 100%;">
    <br><br>
    <div class="text-center">
        <form action="idan_challenge.php" method="GET">
            <input type="submit" id="ukraineButton" value="Ukraine" name="flag">
            <input type="submit" id="russiaButton" value="Russia" name="flag">
            <input type="submit" id="natoButton" value="NATO" name="flag"><br><br>
            <img class="border border-primary" id="image" name="image" width="383" height="255" src=<?php echo $flag; ?>>
            <br><br><strong>Rules:</strong> Inject alert command.
        </form>
    </div>
    </body>
</html>