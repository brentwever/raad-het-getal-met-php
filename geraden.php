<?php
if ($_GET['teller']){
     $teller= $_GET['teller'];
     if ($teller==1){
        $message= "Bingo! Je hebt het geraden in ".$teller." poging!";  
        
    } else {    
        $message= "Bingo! Je hebt het geraden in ".$teller." pogingen!";          
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action='' method='POST'>
    <h1><?php echo $message; ?></h1>
    <h3>Wilt u nog een keer?</h3>
    <input type='text' name='antwoord' placeholder="J of N">
    <button type="submit" name='submit'>Verstuur</button>
</form>
</body>
</html>

<?php
if (isset($_POST['submit'])){
     $antwoord = $_POST['antwoord'];
     if (($antwoord=='j')||($antwoord=='J'))  {
         header('location: raad-het-getal.php');
     } else{
        header('location: gameover.php');
     }
}

?>