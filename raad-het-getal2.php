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
    </head>
    <body>
    <h1><?php echo $message; ?></h1>
        <form action="" method="POST">
        <p><strong>Geef hier uw getal op tussen <?php echo $laagste ?> en <?php echo $hoogste ?>:</strong>
            <input type="text" name="guess"></p>
            <input type="text" name="numtobeguessed" 
                   value="<?php echo $_POST["numtobeguessed"]; ?>" ></p>
    <p><input type="submit" value="Verstuur"/></p>
        </form>
    </body>
</html>