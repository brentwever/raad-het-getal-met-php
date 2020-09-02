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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>
<div class='container'>
<form action='' method='POST'>
<div class="form-group">
    <br>
    <h3><strong><?php echo $message; ?></strong></h3>
    <p>Wilt u nog een keer?<p>
    <input class="form-control" type='text' name='antwoord' placeholder="J of N"><br>
    <button class="btn btn-success" type="submit" name='submit'>Verstuur</button>
</div>
</form>
</div>
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