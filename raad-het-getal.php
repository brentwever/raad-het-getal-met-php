
<?php

if (isset($_POST['submit'])){
   $laagste= $_POST['laagste'];
   $hoogste=$_POST['hoogste'];
    header("location: raad-het-getal2.php?laagste=$laagste&hoogste=$hoogste");
}

?>
<html>
    <head>
        <title>Een Raad-het-getal spelletje</title>
    </head>
    <body> 
        <form action="" method="POST">
        <h1><strong>Geef hier uw gewenste bereik op. Bijvoorbeeld tussen 0 en 10 of tussen 25 en 50 etc:</strong><h1>
            <input type="text" name="laagste" placeholder='Uw benedengrens'><br>
            <input type="text" name="hoogste" placeholder="Uw bovengrens"><br>
            <input type="submit" name="submit" value="Verstuur"/>
        </form>
    </body>
</html>

