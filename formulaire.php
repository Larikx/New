
<?php

$liste=null;
$nb=null;
$count=0;
$calc=0;
$moyenne=0;
$grand=0;
$petit=null;

if(isset($_POST["nbr"])){

    $nb=$_POST["nbr"]; 
}
if (isset($_POST['reset'])){
    
}

if(isset($_POST["liste"])){
  
    $liste=$_POST["liste"];
    if($liste=="") {
        $liste=$nb;
    }else{
        $liste=$liste.",".$nb;
    }
   
    $tab=explode(",", $liste);
    $count=count($tab);
   
}
if(isset($_POST["somme"])){
    $calc=$_POST["somme"];
    $calc=$calc+$nb;
}

if(isset($_POST["moyenne"])){
    if($count==0){
        $moyenne==$nb;
    }else{
        $moyenne=$calc/$count;
    }
}

if(isset($_POST["grand"])){
    $grand=$_POST["grand"];
    if($grand==""){
        $grand=$nb;
    }else if($nb>$grand) {
            $grand=$nb;
        }
    }

    if(isset($_POST["petit"])){
        $petit=$_POST["petit"];
        if($petit==""){
            $petit=$nb;
        }else if($nb<$petit) {
                $petit=$nb;
            }
        }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>Document</title>
</head>
<body>
<form action="formulaire.php" method="post">

    <input type="number" name="nbr" step="1" min="0"><input type="submit" name="envoye" value="Submit" method_exists><input type="submit" name="reset" value="Reset"><br>
 
   <p></p>
    <label for="count">Nombre de nombres</label>
    <input type="text" id="nbr" value="<?php echo $count; ?>" name="count" readonly> <br> <p></p>
    <label for="somme">Somme des nombres</label>
    <input type="text" id="S-nbr" name="somme" readonly value="<?php echo  $calc ?>"> <br> <p></p>
    <label for="moyenne">Moyenne des nombres</label>
    <input type="text" id="moyenne" name="moyenne" readonly value="<?php echo $moyenne ?>"> <br> <p></p>
    <label for="grand">+ Grand</label>
    <input type="text" id="+grand" name="grand" readonly value="<?php echo $grand ?>"> <br> <p></p>
    <label for="petit">+ petit</label>
    <input type="text" id="petit" name="petit" readonly value="<?php echo $petit ?>">  <br> <p></p>
    <label for="text">Liste de nombres</label>
    <textarea name="liste" id="text" cols="30" rows="10" readonly><?php echo $liste; ?></textarea>
    
    
</form> 
</body>
</html>