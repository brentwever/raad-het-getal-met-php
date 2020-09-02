
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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body> 
    <div class='container'>
        <form action="" method="POST">
        <div class="form-group">
        <br>
        <h3><strong>Geef hier uw gewenste bereik op.</strong><h3>
         <p>Bijvoorbeeld tussen 0 en 10 of tussen 25 en 50 etc:<p>
            <input class="form-control" type="text" name="laagste" placeholder='Uw benedengrens'><br>
            <input class="form-control" type="text" name="hoogste" placeholder="Uw bovengrens"><br>
            <input class="btn btn-success" type="submit" name="submit" value="Verstuur"/>
          
        </form>
        </div>
        </div>
    </div>
    </body>
</html>

