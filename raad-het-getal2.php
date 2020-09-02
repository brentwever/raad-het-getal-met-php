<?php
session_start();
$laagste= $_REQUEST['laagste'];
$hoogste=$_REQUEST['hoogste'];

if (!isset($_POST["guess"])) {
   
     $_SESSION["count"] = 0; 
     $message = "Welkom bij deze Raad-het-getal spelletje!";
     $_POST["numtobeguessed"] = rand($laagste,$hoogste);
    
} else if ($_POST["guess"] > $_POST["numtobeguessed"]) { 
    $message = $_POST["guess"]." is te groot! Probeer een lager nummer.";
    $_SESSION["count"]++; 

} else if ($_POST["guess"] < $_POST["numtobeguessed"]) { 
    $message = $_POST["guess"]." is te klein! Probeer een hogere nummer.";
    $_SESSION["count"]++; 

} else { 
    $_SESSION["count"]++;
    if ($_SESSION["count"]==1){
        $teller=$_SESSION["count"];
        header("location: geraden.php?teller=$teller");
        unset($_SESSION["count"]);
           
    } else {
        
        $teller=$_SESSION["count"];
        header("location: geraden.php?teller=$teller");    
        unset($_SESSION["count"]); 
        
    }
    
}
?>
<html>
    <head>
        <title>Een PHP raad-het-getal spelletje</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </head>
    <body>
    <div class='container'>
    <br>
    <h3><strong><?php echo $message; ?></strong></h3>
        <form action="" method="POST">
        <div class="form-group">
        <p>Geef hier uw getal op tussen <?php echo $laagste ?> en <?php echo $hoogste ?><br>
            <input class="form-control" type="text" name="guess"></p>
            <input class="form-control" type="hidden" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input class="btn btn-success" type="submit" value="Verstuur"/></p>
        </form>
    </div>
    </body>
</html>